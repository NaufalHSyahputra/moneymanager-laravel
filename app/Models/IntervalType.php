<?php

namespace App\Models;

enum IntervalType: string
{
    case DAY = 'day';
    case WEEK = 'week';
    case MONTH = 'month';
    case YEAR = 'year';

    public function incrementDate(\Carbon\Carbon $date, int $intervalN): \Carbon\Carbon
    {
        return match ($this) {
            self::DAY => $date->addDays($intervalN),
            self::WEEK => $date->addWeeks($intervalN),
            self::MONTH => $date->addMonths($intervalN),
            self::YEAR => $date->addYears($intervalN),
        };
    }

    public function forDisplay(int $periodN): string
    {
        return match ($this) {
            self::DAY => 'day' . ($periodN > 1 ? 's' : ''),
            self::WEEK => 'week' . ($periodN > 1 ? 's' : ''),
            self::MONTH => 'month' . ($periodN > 1 ? 's' : ''),
            self::YEAR => 'year' . ($periodN > 1 ? 's' : ''),
        };
    }
}