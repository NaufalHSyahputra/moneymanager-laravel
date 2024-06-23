<?php

namespace App\Http\Controllers;

use App\Models\TimePeriod;
use Illuminate\Http\Request;

class TimePeriodController extends Controller
{
    public function index(Request $request)
    {
        // Example: Get the current month time period starting from the 15th
        $startDayOfMonth = (int)$request->get('start_day_of_month', 1);
        /**
         * Start Day is Weekend
         * 
         * 1: Do Nothing
         * 2: Previous Friday
         * 3: Next Monday
         */
        $startDayIsWeekend = (int)$request->get('start_day_is_weekend', 1);
        $timePeriod = TimePeriod::currentMonth($startDayOfMonth, $startDayIsWeekend);
        $range = $timePeriod->toRange($startDayOfMonth);
        $shortDisplay = $timePeriod->toDisplayShort($startDayOfMonth);
        $longDisplay = $timePeriod->toDisplayLong($startDayOfMonth);
        return response()->json([
            'range' => [
                'from' => $range[0]->toDateString(),
                'to' => $range[1]->toDateString(),
            ],
            'short_display' => $shortDisplay,
            'long_display' => $longDisplay,
        ]);
    }
}
