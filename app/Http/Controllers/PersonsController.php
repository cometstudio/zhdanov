<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Webinar;
use App\Models\Product;
use App\Models\Schedule;
use App\Models\User;
use App\Models\Misc;

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
        // Get a person
        $person = User::where('id', '=', $authorId)->firstOrFail();
        // Get user's last lesson
        $lesson = Lesson::where('author_id', '=', $authorId)->orderBy('id', 'DESC')->first();
        // Get user's last webinar
        $webinar = Webinar::where('author_id', '=', $authorId)->orderBy('id', 'DESC')->first();
        // Get products
        $products = Product::orderBy('id', 'DESC')->limit(5)->get();
        // Get recent events
        $recentEvents = (new Schedule())->getRecentEvents($authorId);

        $headMisc = Misc::where('id', '=', config('persons.headMisc.'.$alias, 0))->first();

        return view('persons.item', [
            'css'=>$this->css,
            'authorAlias'=>$alias,
            'authorId'=>$authorId,
            'person'=>$person,
            'lesson'=>$lesson,
            'webinar'=>$webinar,
            'products'=>$products,
            'recentEvents'=>$recentEvents,
            'headMisc'=>$headMisc,
            'daysOfWeek'=>config('dictionary.daysOfWeek', []),
        ]);
    }
}
