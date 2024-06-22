<?php

namespace App\Models;

use Carbon\Carbon;

class TimePeriod
{
    private $month;
    private $year;
    private FromToTimeRange|null $fromToRange;
    private LastNTimeRange|null $lastNRange;

    public function __construct($month = null, $year = null, $fromToRange = null, $lastNRange = null)
    {
        $this->month = $month;
        $this->year = $year;
        $this->fromToRange = $fromToRange;
        $this->lastNRange = $lastNRange;
    }

    public static function currentMonth($startDayOfMonth)
    {
        $dateNowUTC = Carbon::now('UTC');
        $dayToday = $dateNowUTC->day;

        $newPeriodStarted = $dayToday >= $startDayOfMonth;
        $periodDate = $newPeriodStarted ? $dateNowUTC : $dateNowUTC->subMonth();

        return new TimePeriod($periodDate->month, $periodDate->year);
    }

    public function isValid()
    {
        return $this->month !== null || $this->fromToRange !== null || $this->lastNRange !== null;
    }

    public function toRange($startDateOfMonth)
    {
        if ($this->month !== null) {
            $date = $this->year !== null ? Carbon::create($this->year, $this->month) : Carbon::create(null, $this->month);
            $range = $startDateOfMonth != 1 ? $this->customStartDayOfMonthPeriodRange($date, $startDateOfMonth) : [$date->startOfMonth(), $date->endOfMonth()];
            $fromtoRange = new FromToTimeRange($range[0], $range[1]);
            // Check if the range falls on a weekend and subtract one day if it does
            if ($fromtoRange->from()->isWeekend()) {
                if ($fromtoRange->from()->isSunday()) { 
                    $fromtoRange->from()->setDateFrom($fromtoRange->from()->subDays(2));
                } else { 
                    $fromtoRange->from()->setDateFrom($fromtoRange->from()->subDay());
                }
            }
            if ($fromtoRange->to()->isWeekend()) {
                if ($fromtoRange->to()->isSunday()) { 
                    $fromtoRange->to()->setDateFrom($fromtoRange->to()->subDays(2));
                } else { 
                    $fromtoRange->to()->setDateFrom($fromtoRange->to()->subDay());
                }
            }
        } elseif ($this->fromToRange !== null) {
            $fromtoRange = new FromToTimeRange();
        } elseif ($this->lastNRange !== null) {
            $fromtoRange = new FromToTimeRange($this->lastNRange->fromDate(), Carbon::now('UTC'));
        } else {
            $date = Carbon::now('UTC');
            $fromtoRange = new FromToTimeRange($date->startOfMonth(), $date->endOfMonth());
        }
        return [$fromtoRange->from(), $fromtoRange->to()];
    }

    private function customStartDayOfMonthPeriodRange($date, $startDateOfMonth)
    {
        $from = $date->copy()->day($startDateOfMonth)->startOfDay()->setTimezone('UTC');
        $to = $date->copy()->addMonth()->day($startDateOfMonth)->subDay()->endOfDay()->setTimezone('UTC');
        return [$from, $to];
    }

    public function toDisplayShort($startDateOfMonth)
    {
        if ($this->month !== null) {
            return $startDateOfMonth == 1 ? $this->displayMonthStartingOn1st($this->month) : $this->formatRange($this->toRange($startDateOfMonth));
        } elseif ($this->fromToRange !== null) {
            return $this->fromToRange->toDisplay();
        } elseif ($this->lastNRange !== null) {
            return 'Last ' . $this->lastNRange->forDisplay();
        } else {
            return 'Custom';
        }
    }

    public function toDisplayLong($startDateOfMonth)
    {
        if ($this->month !== null) {
            if ($startDateOfMonth == 1) {
                $this->displayMonthStartingOn1st($this->month);
            } else { 
                $toRange = $this->toRange($startDateOfMonth);
                return $this->toDisplay($toRange[0], $toRange[1]);
            }
        } elseif ($this->fromToRange !== null) {
            return $this->fromToRange->toDisplay();
        } elseif ($this->lastNRange !== null) {
            return 'the last ' . $this->lastNRange->forDisplay();
        } else {
            $toRange = $this->toRange($startDateOfMonth);
            return $this->toDisplay($toRange[0], $toRange[1]);
        }
    }

    private function displayMonthStartingOn1st($month)
    {
        $year = $this->year;
        $currentYear = Carbon::now('UTC')->year;
        return $year !== null && $currentYear != $year ? substr($month, 0, 3) . ', ' . $year : $month;
    }

    private function formatRange($range)
    {
        $pattern = 'M d';
        return $range[0]->format($pattern) . ' - ' . $range[1]->format($pattern);
    }

    private function toDisplay(Carbon $from, Carbon $to)
    {
        if ($from && $to) {
            return $from->format('Y-m-d') . ' - ' . $to->format('Y-m-d');
        } elseif ($from) {
            return 'From ' . $from->format('Y-m-d');
        } elseif ($to) {
            return 'To ' . $to->format('Y-m-d');
        } else {
            return 'Range';
        }
    }
}