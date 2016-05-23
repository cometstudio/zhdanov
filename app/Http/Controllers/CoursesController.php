<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CoursesController extends Controller
{
    protected $css = 'courses';

    public function index()
    {
        return view('courses.index', ['css'=>$this->css]);
    }

    public function item($id)
    {
        return view('courses.item', ['css'=>$this->css]);
    }
}
