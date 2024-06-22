<?php

namespace App\Http\Controllers;

use App\Models\TimePeriod;
use Illuminate\Http\Request;

class TimePeriodController extends Controller
{
    public function index()
    {
        // Example: Get the current month time period starting from the 15th
        $startDayOfMonth = 25;
        $timePeriod = TimePeriod::currentMonth($startDayOfMonth);
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

        // Check if the time period is valid
        // if ($timePeriod->isValid()) {
        //     // Get the date range for the time period
        //     // $range = $timePeriod->toRange($startDayOfMonth);

        //     // Format the range for display
        //     // $shortDisplay = $timePeriod->toDisplayShort($startDayOfMonth);
        //     // $longDisplay = $timePeriod->toDisplayLong($startDayOfMonth);

        //     return response()->json([
        //         // 'range' => [
        //         //     'from' => $range->from->toDateString(),
        //         //     'to' => $range->to->toDateString(),
        //         // ],
        //         // 'short_display' => $shortDisplay,
        //         // 'long_display' => $longDisplay,
        //     ]);
        // } else {
        // }
    }
}
