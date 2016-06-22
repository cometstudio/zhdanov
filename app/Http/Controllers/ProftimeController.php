<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Videochannel;

class ProftimeController extends Controller
{
    protected $css = 'proftime';

    public function index(Request $request)
    {
        $tags = Videochannel::all();

        return view('proftime.index', [
            'tags'=>$tags,
            'css'=>$this->css,
            'title'=>'PROF fashion TIME',
        ]);
    }
}
