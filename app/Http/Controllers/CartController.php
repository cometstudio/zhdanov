<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CartController extends Controller
{
    protected $css = 'shop';

    public function index()
    {
        return view('cart.index', ['css'=>$this->css]);
    }
}
