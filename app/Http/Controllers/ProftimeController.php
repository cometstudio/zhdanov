<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProftimeController extends Controller
{
    protected $css = 'proftime';

    public function index()
    {
        return view('proftime.index', [
            'css'=>$this->css,
            'title'=>'PROF fashion TIME',
        ]);
    }
}
