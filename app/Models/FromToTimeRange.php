<?php

namespace App\Models;

use Carbon\Carbon;

class FromToTimeRange
{
    public $from;
    public $to;

    public function __construct($from = null, $to = null)
    {
        $this->from = $from ? Carbon::parse($from) : null;
        $this->to = $to ? Carbon::parse($to) : null;
    }

    public function from()
    {
        return $this->from ?: Carbon::now()->subYears(30);
    }

    public function to()
    {
        return $this->to ?: Carbon::now()->addYears(30);
    }

    public function upcomingFrom()
    {
        $startOfDayNowUTC = Carbon::now()->startOfDay()->subDay();
        return $this->includes($startOfDayNowUTC) ? $startOfDayNowUTC : $this->from();
    }

    public function overdueTo()
    {
        $startOfDayNowUTC = Carbon::now()->startOfDay()->addDay();
        return $this->includes($startOfDayNowUTC) ? $startOfDayNowUTC : $this->to();
    }

    public function includes($dateTime)
    {
        return $dateTime->isAfter($this->from()) && $dateTime->isBefore($this->to());
    }

    public function toDisplay()
    {
        if ($this->from && $this->to) {
            return $this->from->format('Y-m-d') . ' - ' . $this->to->format('Y-m-d');
        } elseif ($this->from) {
            return 'From ' . $this->from->format('Y-m-d');
        } elseif ($this->to) {
            return 'To ' . $this->to->format('Y-m-d');
        } else {
            return 'Range';
        }
    }
}
