<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    protected $css = 'user';

    public function signup()
    {
        return view('users.signup', ['css'=>$this->css]);
    }

    public function login()
    {
        return view('users.login', ['css'=>$this->css]);
    }
}
