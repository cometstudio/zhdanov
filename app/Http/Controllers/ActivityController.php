<?php

namespace App\Http\Controllers;

use App\Models\Activity;

class ActivityController extends Controller
{
    public function act($action = 'get')
    {
        $activity = Activity::orderBy(\DB::raw('rand()'))->limit(1)->first();

        return response()->json([
            'text'=>!empty($activity->name) ? $activity->name : ''
        ]);
    }
}
