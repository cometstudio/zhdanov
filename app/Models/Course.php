<?php

namespace App\Models;

use Illuminate\Support\Collection;

class Course extends BaseModel
{
    protected $fillable = [
        'name',
        'author_id',
        'theme_id',
        'length',
        'teaser',
        'text',
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

    public function schedule()
    {
        return $this->hasMany('App\Models\Schedule', 'course_id', 'id');
    }

    public function getOptions()
    {
        $authors = User::where('is_author', '=', 1)->orderBy('name', 'ASC')->get();

        $themes = Theme::all();

        return compact(
            'authors',
            'themes'
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
