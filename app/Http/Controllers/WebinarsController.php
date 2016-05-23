<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WebinarsController extends Controller
{
    protected $css = 'lessons';

    public function index()
    {
        return view('webinars.index', ['css'=>$this->css]);
    }

    public function item($id)
    {
        return view('webinars.item', ['css'=>$this->css]);
    }
}
