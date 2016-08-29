<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    protected $css = 'reviews';
    protected $title = 'Отчёт о мероприятии';

    public function item($id)
    {
        $review = Review::where('id', '=', $id)->firstOrFail();

        $this->title = $review->course->name;
        
        return view('reviews.item', [
            'css'=>$this->css,
            'review'=>$review,
            'options'=>$review->getOptions(),
            'title'=>$this->title,
        ]);
    }
}
