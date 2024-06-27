<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\IntervalType;

class LastNTimeRange
{
    public $periodN;
    public $periodType;

    public function __construct($periodN, IntervalType $periodType)
    {
        $this->periodN = $periodN;
        $this->periodType = $periodType;
    }

    public function fromDate()
    {
        return $this->periodType->incrementDate(Carbon::now('Asia/Jakarta'), -$this->periodN);
    }

    public function forDisplay()
    {
        return $this->periodN . ' ' . $this->periodType->forDisplay($this->periodN);
    }
}