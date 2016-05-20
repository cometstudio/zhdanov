<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class IrinaController extends PersonsController
{
    public function index()
    {
        return view('persons.irina', ['css'=>$this->css]);
    }
}
