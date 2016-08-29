<?php

namespace App\Http\Controllers;

use App\Models\Misc;
use Illuminate\Http\Request;
use App\Models\Videochannel;

class ProftimeController extends Controller
{
    protected $css = 'proftime';

    public function index(Request $request)
    {
        $misc = Misc::where('id', '=', 1)->firstOrFail();

        $tags = Videochannel::orderBy('ord', 'DESC')->get();

        return view('proftime.index', [
            'tags'=>$tags,
            'css'=>$this->css,
            'misc'=>$misc,
            'title'=>(!empty($misc->title) ? $misc->title : 'PROF fashion TIME'),
        ]);
    }
}
