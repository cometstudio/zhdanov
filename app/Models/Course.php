<?php

namespace App\Models;

use Illuminate\Support\Collection;

class Course extends BaseModel
{
    protected $fillable = [
        'name',
        'name_shorten',
        'author_id',
        'theme_id',
        'length',
        'teaser',
        'text_left',
        'text_down_left',
        'text_right',
        'video',
        'tools',
        'day_1',
        'day_2',
        'day_3',
        'day_4',
        'day_5',
        'day_6',
        'day_7',
        'gallery'
    ];

    public function author()
    {
        return $this->hasOne('App\Models\User', 'id', 'author_id');
    }

    public function theme()
    {
        return $this->hasOne('App\Models\Theme', 'id', 'theme_id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'course_products', 'course_id', 'product_id')->withPivot('id');
    }

    public function schedule()
    {
        return $this->hasMany('App\Models\Schedule', 'course_id', 'id');
    }

    public function getOptions()
    {
        $authors = User::where('is_author', '=', 1)->orderBy('ord', 'DESC')->get();

        $themes = Theme::all();

        $products = Product::orderBy('name', 'ASC')->get();

        $courseProducts = $this->products()->get();

        return compact(
            'authors',
            'themes',
            'products',
            'courseProducts'
        );
    }

    public function getByDate(Collection $courses = null, $date = null)
    {
        try{
            if(empty($courses) || !$courses->count()) throw new \Exception;
            if(empty($date)) throw new \Exception;

            return $courses->filter(function ($course) use ($date) {

                $time = \Date::getTimeFromDate($date);
                $timeFrom = \Date::getTimeFromDate(\Date::getDateFromTime($course->start_time, 1));
                $timeTo = $timeFrom + ($course->length * 86400);

                return (($time >= $timeFrom) && ($time < $timeTo)) ? true : false;
            });
        }catch (\Exception $e){
            return new Collection();
        }
    }
}
