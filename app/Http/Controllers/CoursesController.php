<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\UserSchedule;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Webinar;
use App\Models\Product;
use App\Models\Misc;
use Illuminate\Database\Eloquent\Collection;

class CoursesController extends Controller
{
    protected $css = 'courses';
    protected $title = 'Программы обучения';

    public function index(Request $request)
    {
        $input = $request->all();

        $courseModel = new Course();

        $modelOptions = $courseModel->getOptions();

        if(!empty($input)){

            $builder = $courseModel;

            foreach ($input as $key=>$value){
                switch ($key){
                    case 'aid':
                        if(!empty($value)) $builder = Course::where('author_id', '=', $value);

                        if(!empty($modelOptions['authors'])) {

                            $author = $modelOptions['authors']->filter(function($user) use ($value){
                                return $user->id == $value ? true : false;
                            })->first();

                            if(!empty($author)) $this->title = $author->name.'. '.$this->title;
                        }
                        break;
                    case 'tid':
                        if(!empty($value)) $builder = Course::where('theme_id', '=', $value);

                        if(!empty($modelOptions['themes'])) {

                            $theme = $modelOptions['themes']->filter(function($theme) use ($value){
                                return $theme->id == $value ? true : false;
                            })->first();

                            if(!empty($theme)) $this->title .= ' по теме "'.$theme->name.'"';
                        }
                        break;
                }
            }

            if($length = $request->get('length')){
                $builder = $builder->where('length', '=', $length);
            }

            $courses = $builder->orderBy('ord', 'DESC')->get();
        }else{
            $courses = Course::orderBy('ord', 'DESC')->get();
        }

        return view('courses.index', [
            'css'=>$this->css,
            'courses'=>$courses,
            'options'=>$modelOptions,
            'title'=>$this->title,
        ]);
    }

    public function item(Request $request, $id)
    {
        $course = Course::where('id', '=', $id)->firstOrFail();

        // Get binded products
        $products = $course->products()->get();

        if($request->has('schedule')){
            $scheduleItem = Schedule::where('id', '=', $request->get('schedule'))->firstOrFail();
            $userScheduleItem = UserSchedule::where('schedule_id', '=', $scheduleItem->id)->first();
            $interval = \Date::getInterval($scheduleItem->start_time);
        }

        $this->title = $course->name;

        $webinarModel = new Webinar();
        $courseModel = new Course();

        // Get active period data
        $activeYear = date('Y');
        $activeMonth = date('n');
        $activeMonthStartDay = \Date::getMonthStartDay($activeMonth, $activeYear);
        $activeMonthLength = \Date::getMonthLength($activeMonth, $activeYear);

        $galleryTitle = Misc::where('id', '=', 4)->first();

        return view('courses.item', [
            'css'=>$this->css,
            'course'=>$course,
            'scheduleItem'=>(!empty($scheduleItem) ? $scheduleItem : null),
            'userScheduleItem'=>(!empty($userScheduleItem) ? $userScheduleItem : null),
            'interval'=>(!empty($interval) ? $interval : null),
            'products'=>$products,
            'webinarModel'=>$webinarModel,
            'webinars'=>!empty($webinars) ? $webinars : new Collection(),
            'courseModel'=>$courseModel,
            'courses'=>!empty($courses) ? $courses : new Collection(),
            'activeMonth'=>$activeMonth,
            'activeMonthStartDay'=>$activeMonthStartDay,
            'activeMonthLength'=>$activeMonthLength,
            'activeMonthData'=>config('dictionary.months', [])[$activeMonth],
            'activeYear'=>$activeYear,
            'daysOfWeek'=>config('dictionary.daysOfWeek', []),
            'galleryTitle'=>$galleryTitle,
            'title'=>$this->title,
        ]);
    }
}
