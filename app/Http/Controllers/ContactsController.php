<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactsController extends Controller
{
    protected $css = 'contacts';

    public function index()
    {
        return view('contacts.index', ['css'=>$this->css]);
    }
}
