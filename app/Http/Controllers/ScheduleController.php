<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Course;
use App\Models\Schedule;
use App\Models\User;
use App\Models\Webinar;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Collection;

class ScheduleController extends Controller
{
    protected $css = 'schedule';

    public function index(Request $request)
    {
        $input = $request->all();

        $scheduleModel = new Schedule();

        $modelOptions = $scheduleModel->getOptions();

        // Get active period data
        $activeYear = !empty($input['y']) ? $request->get('y') : date('Y');
        $activeMonth = !empty($input['m']) ? $request->get('m') : date('n');
        $activeMonthStartDay = \Date::getMonthStartDay($activeMonth, $activeYear);
        $activeMonthLength = \Date::getMonthLength($activeMonth, $activeYear);

        // Get the webinars for active period
        $webinarModel = new Webinar();

        if(empty($input['type']) || ($input['type'] == 1)) {
            $builder = Webinar::join('users', 'webinars.author_id', '=', 'users.id')
                ->where('webinars.start_time', '>=', \Date::getTimeFromDate([1, $activeMonth, $activeYear]))
                ->where('webinars.start_time', '<', \Date::getTimeFromDate([\Date::getMonthLength($activeMonth, $activeYear), $activeMonth, $activeYear]))
                ->select(
                    'webinars.*',
                    \DB::raw('users.name as author_name')
                );

            if(!empty($input['aid'])) $builder->where('webinars.author_id', '=', $input['aid']);

            if(!empty($input['tid'])) $builder->where('webinars.theme_id', '=', $input['tid']);

            $webinars = $builder->get();
        }

        // Get the courses for active period
        $courseModel = new Course();

        if(empty($input['type']) || ($input['type'] == 2)) {

            $builder = Course::join('schedule', 'schedule.course_id', '=', 'courses.id')
                ->join('users', 'courses.author_id', '=', 'users.id')
                ->join('cities', 'schedule.city_id', '=', 'cities.id')
                ->select(
                    'courses.*',
                    'schedule.start_time',
                    \DB::raw('users.name as author_name'),
                    \DB::raw('cities.name as city_name')
                );

            if(!empty($input['aid'])) $builder->where('courses.author_id', '=', $input['aid']);

            if(!empty($input['tid'])) $builder->where('courses.theme_id', '=', $input['tid']);

            if(!empty($input['cid'])) $builder->where('schedule.city_id', '=', $input['cid']);

            $courses = $builder->get();
        }

        return view('schedule.index', [
            'css'=>$this->css,
            'activeMonth'=>$activeMonth,
            'activeMonthStartDay'=>$activeMonthStartDay,
            'activeMonthLength'=>$activeMonthLength,
            'activeMonthData'=>config('dictionary.months', [])[$activeMonth],
            'activeYear'=>$activeYear,
            'daysOfWeek'=>config('dictionary.daysOfWeek', []),
            'webinarModel'=>$webinarModel,
            'webinars'=>!empty($webinars) ? $webinars : new Collection(),
            'courseModel'=>$courseModel,
            'courses'=>!empty($courses) ? $courses : new Collection(),
            'options'=>$modelOptions,
        ]);
    }

    public function item($id)
    {
        return view('schedule.item', ['css'=>$this->css]);
    }
}
