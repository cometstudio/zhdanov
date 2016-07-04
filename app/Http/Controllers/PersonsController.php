<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Lesson;
use App\Models\Webinar;
use App\Models\Product;
use App\Models\Schedule;

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
        $authorId = config('persons.'.$alias, 0);
        // Get user's last lesson
        $lesson = Lesson::where('author_id', '=', $authorId)->orderBy('id', 'DESC')->first();
        // Get user's last webinar
        $webinar = Webinar::where('author_id', '=', $authorId)->orderBy('id', 'DESC')->first();
        // Get products
        $products = Product::orderBy('id', 'DESC')->limit(5)->get();
        // Get recent events
        $recentEvents = (new Schedule())->getRecentEvents($authorId);

        return view('persons.item', [
            'css'=>$this->css,
            'authorAlias'=>$alias,
            'authorId'=>$authorId,
            'lesson'=>$lesson,
            'webinar'=>$webinar,
            'products'=>$products,
            'recentEvents'=>$recentEvents,
            'daysOfWeek'=>config('dictionary.daysOfWeek', []),
        ]);
    }
}
