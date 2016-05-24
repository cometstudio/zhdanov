<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Lesson;
use App\Models\Webinar;

class PersonsController extends Controller
{
    protected $css = 'person';

    public function yuri()
    {
        return $this->person('yuri');
    }

    public function irina()
    {
        return $this->person('irina');
    }

    private function person($alias = '')
    {
        // Get user id from config
        $authorId = config('persons.'.$alias);
        // Get user's last lesson
        $lesson = Lesson::where('author_id', '=', $authorId)->orderBy('id', 'DESC')->first();
        // Get user's last webinar
        $webinar = Webinar::where('author_id', '=', $authorId)->orderBy('id', 'DESC')->first();

        return view('persons.'.$alias, [
            'css'=>$this->css,
            'authorId'=>$authorId,
            'lesson'=>$lesson,
            'webinar'=>$webinar,
        ]);
    }
}
