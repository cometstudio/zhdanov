<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class YuriController extends PersonsController
{
    public function index()
    {
        return view('persons.yuri', ['css'=>$this->css]);
    }
}
