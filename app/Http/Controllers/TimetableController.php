<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class TimetableController extends Controller
{
    protected $css = 'timetable';

    public function index(Request $request)
    {
        $input = $request->all();

        $activeYear = !empty($input['y']) ? $request->get('y') : date('Y');
        $activeMonth = !empty($input['m']) ? $request->get('m') : date('n');
        $activeMonthStartDay = \Date::getMonthStartDay($activeMonth, $activeYear);
        $activeMonthLength = \Date::getMonthLength($activeMonth, $activeYear);

        $authors = User::where('is_author', '=', 1)->get();
        $cities = City::all();

        return view('timetable.index', [
            'css'=>$this->css,
            'activeMonth'=>$activeMonth,
            'activeMonthStartDay'=>$activeMonthStartDay,
            'activeMonthLength'=>$activeMonthLength,
            'activeMonthData'=>config('dictionary.months', [])[$activeMonth],
            'activeYear'=>$activeYear,
            'daysOfWeek'=>config('dictionary.daysOfWeek', []),
            'authors'=>$authors,
            'cities'=>$cities,
        ]);
    }

    public function item($id)
    {
        return view('timetable.item', ['css'=>$this->css]);
    }
}
