<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShopController extends Controller
{
    protected $css = 'shop';

    public function index()
    {
        return view('shop.index', ['css'=>$this->css]);
    }

    public function item($id)
    {
        return view('shop.item', ['css'=>$this->css]);
    }
}
