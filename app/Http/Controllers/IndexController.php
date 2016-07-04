<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Schedule;
use App\Models\Videochannel;

class IndexController extends Controller
{
    public function index()
    {
        // Get recent events
        $recentEvents = (new Schedule())->getRecentEvents();

        $videochannelTags = Videochannel::all();

        return view('index.index', [
            'recentEvents'=>$recentEvents,
            'daysOfWeek'=>config('dictionary.daysOfWeek', []),
            'videochannelTags'=>$videochannelTags,
        ]);
    }
}
