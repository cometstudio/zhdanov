<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GalleryController extends Controller
{
    protected $css = 'gallery';

    public function index()
    {
        return view('gallery.index', ['css'=>$this->css]);
    }
}
