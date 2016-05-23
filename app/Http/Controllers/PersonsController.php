<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Lesson;

class PersonsController extends Controller
{
    protected $css = 'person';
    protected $yuriId = 2;
    protected $irinaId = 3;

    public function yuri()
    {
        return $this->person($this->yuriId, 'yuri');
    }

    public function irina()
    {
        return $this->person($this->irinaId, 'irina');
    }

    private function person($userId = 0, $view = '')
    {
        $lesson = Lesson::where('author_id', '=', $userId)->orderBy('id', 'DESC')->first();

        return view('persons.'.$view, [
            'css'=>$this->css,
            'lesson'=>$lesson,
        ]);
    }
}
