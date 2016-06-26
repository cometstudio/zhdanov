<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Course;
use App\Models\Product;

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

            $courses = $builder->get();
        }else{
            $courses = Course::all();
        }

        return view('courses.index', [
            'css'=>$this->css,
            'courses'=>$courses,
            'options'=>$modelOptions,
            'title'=>$this->title,
        ]);
    }

    public function item($id)
    {
        $course = Course::where('id', '=', $id)->firstOrFail();

        $this->title = $course->name;

        // Get products
        $products = Product::orderBy('id', 'DESC')->get();
        
        return view('courses.item', [
            'css'=>$this->css,
            'course'=>$course,
            'products'=>$products,
            'title'=>$this->title,
        ]);
    }
}
