<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LessonsController extends Controller
{
    protected $css = 'lessons';

    public function index()
    {
        return view('lessons.index', ['css'=>$this->css]);
    }

    public function item($id)
    {
        return view('lessons.item', ['css'=>$this->css]);
    }
}
