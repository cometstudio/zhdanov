<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use App\Models\Webinar;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Lesson;

class LessonsController extends Controller
{
    protected $css = 'lessons';
    protected $title = 'Видеоуроки';

    public function index(Request $request)
    {
        $input = $request->all();

        $lessonModel = new Lesson();

        $modelOptions = $lessonModel->getOptions();

        if(!empty($input)){
            
            $builder = $lessonModel;
            
            foreach ($input as $key=>$value){
                switch ($key){
                    case 'aid':
                        if(!empty($value)) $builder = Lesson::where('author_id', '=', $value);

                        if(!empty($modelOptions['authors'])) {

                            $author = $modelOptions['authors']->filter(function($user) use ($value){
                                return $user->id == $value ? true : false;
                            })->first();

                            if(!empty($author)) $this->title = $author->name.'. '.$this->title;
                        }
                    break;
                    case 'tid':
                        if(!empty($value)) $builder = Lesson::where('theme_id', '=', $value);

                        if(!empty($modelOptions['themes'])) {

                            $theme = $modelOptions['themes']->filter(function($theme) use ($value){
                                return $theme->id == $value ? true : false;
                            })->first();

                            if(!empty($theme)) $this->title .= ' по теме "'.$theme->name.'"';
                        }
                    break;
                }
            }

            $lessons = $builder->get();
        }else{
            $lessons = Lesson::all();
        }

        return view('lessons.index', [
            'css'=>$this->css,
            'lessons'=>$lessons,
            'options'=>$modelOptions,
            'title'=>$this->title,
        ]);
    }

    public function item($id)
    {
        $lesson = Lesson::where('id', '=', $id)->firstOrFail();

        $similarLessons = Lesson::where('id', '!=', $lesson->id)
            ->where('theme_id', '=', $lesson->theme_id)
            ->limit(2)
            ->get();

        $webinars = Webinar::orderBy('created_at', 'DESC')->limit(2)->get();

        $this->title = $lesson->name;

        return view('lessons.item', [
            'css'=>$this->css,
            'lesson'=>$lesson,
            'options'=>$lesson->getOptions(),
            'similarLessons'=>$similarLessons,
            'webinars'=>$webinars,
            'title'=>$this->title,
        ]);
    }
}
