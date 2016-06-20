<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Lesson;

class LessonsController extends Controller
{
    protected $css = 'lessons';

    public function index()
    {
        $lesson = new Lesson();

        return view('lessons.index', [
            'css'=>$this->css,
            'options'=>$lesson->getOptions(),
        ]);
    }

    public function item($id)
    {
        return view('lessons.item', ['css'=>$this->css]);
    }
}
