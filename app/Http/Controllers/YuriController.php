<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Lesson;

class YuriController extends PersonsController
{
    public function index()
    {
        $lesson = Lesson::orderBy('id', 'DESC')->first();
        
        return view('persons.yuri', [
            'css'=>$this->css,
            'lesson'=>$lesson,
        ]);
    }
}
