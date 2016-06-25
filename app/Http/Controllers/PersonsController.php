<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Lesson;
use App\Models\Webinar;
use App\Models\Product;

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
        // Get products
        $products = Product::orderBy('id', 'DESC')->get();
        // Get recent events
        $recentEvents = (new Schedule())->getRecentEvents($authorId);

        return view('persons.'.$alias, [
            'css'=>$this->css,
            'authorId'=>$authorId,
            'lesson'=>$lesson,
            'webinar'=>$webinar,
            'products'=>$products,
            'recentEvents'=>$recentEvents,
            'daysOfWeek'=>config('dictionary.daysOfWeek', []),
        ]);
    }
}
