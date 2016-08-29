<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Webinar;
use App\Models\Lesson;

class WebinarsController extends Controller
{
    protected $css = 'lessons';
    protected $title = 'Вебинары';

    public function index(Request $request)
    {
        $input = $request->all();

        $webinarModel = new Webinar();

        $modelOptions = $webinarModel->getOptions();

        if(!empty($input)){

            $builder = $webinarModel;

            foreach ($input as $key=>$value){
                switch ($key){
                    case 'aid':
                        if(!empty($value)) $builder = Webinar::where('author_id', '=', $value);

                        if(!empty($modelOptions['authors'])) {

                            $author = $modelOptions['authors']->filter(function($user) use ($value){
                                return $user->id == $value ? true : false;
                            })->first();

                            if(!empty($author)) $this->title = $author->name.'. '.$this->title;
                        }
                        break;
                    case 'tid':
                        if(!empty($value)) $builder = Webinar::where('theme_id', '=', $value);

                        if(!empty($modelOptions['themes'])) {

                            $theme = $modelOptions['themes']->filter(function($theme) use ($value){
                                return $theme->id == $value ? true : false;
                            })->first();

                            if(!empty($theme)) $this->title .= ' по теме "'.$theme->name.'"';
                        }
                        break;
                }
            }

            $webinars = $builder->get();
        }else{
            $webinars = Webinar::all();
        }

        return view('webinars.index', [
            'css'=>$this->css,
            'webinars'=>$webinars,
            'options'=>$modelOptions,
            'title'=>$this->title,
        ]);
    }

    public function item($id)
    {
        $webinar = Webinar::where('id', '=', $id)->firstOrFail();
        
        $interval = \Date::getInterval($webinar->start_date);

        $nextWebinars = Webinar::where('id', '!=', $webinar->id)
            ->limit(2)
            ->get();

        $lessons = Lesson::orderBy('created_at', 'DESC')->get();

        $this->title = $webinar->name;

        return view('webinars.item', [
            'css'=>$this->css,
            'webinar'=>$webinar,
            'interval'=>$interval,
            'options'=>$webinar->getOptions(),
            'nextWebinars'=>$nextWebinars,
            'lessons'=>$lessons,
            'title'=>$this->title,
        ]);
    }
}
