<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TimetableController extends Controller
{
    protected $css = 'timetable';

    public function index()
    {
        return view('timetable.index', ['css'=>$this->css]);
    }

    public function item($id)
    {
        return view('timetable.item', ['css'=>$this->css]);
    }
}
