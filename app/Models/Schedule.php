<?php

namespace App\Models;

use Illuminate\Support\Collection;

class Schedule extends BaseModel
{
    protected $table = 'schedule';
    
    protected $fillable = [
        'course_id',
        'city_id',
        'start_time',
    ];

    public function course()
    {
        return $this->hasOne('App\Models\Course', 'id', 'course_id');
    }

    public function city()
    {
        return $this->hasOne('App\Models\City', 'id', 'city_id');
    }

    public function getOptions()
    {
        $courses = Course::all();
        $cities = City::all();
        $authors = User::where('is_author', '=', 1)->orderBy('name', 'ASC')->get();
        $themes = Theme::all();

        return compact(
            'courses',
            'cities',
            'authors',
            'themes'
        );
    }

    public function getRecentEvents($authorId = 0, $quantity = 7)
    {
        try{
            if(empty($authorId)) throw new \Exception;
            
            $webinars = Webinar::join('users', 'webinars.author_id', '=', 'users.id')
                ->where('webinars.author_id', '=', $authorId)
                ->select(
                    'webinars.*',
                    \DB::raw('"webinar" AS type'),
                    \DB::raw('users.name AS author_name')
                )
                ->orderBy('webinars.start_time', 'DESC')
                ->limit(7)
                ->get()
                ->keyBy('start_time')
                ->toArray();

            $courses = Course::join('schedule', 'schedule.course_id', '=', 'courses.id')
                ->join('users', 'courses.author_id', '=', 'users.id')
                ->join('cities', 'schedule.city_id', '=', 'cities.id')
                ->where('courses.author_id', '=', $authorId)
                ->select(
                    'courses.*',
                    'schedule.start_time',
                    \DB::raw('"course" AS type'),
                    \DB::raw('users.name AS author_name'),
                    \DB::raw('cities.name AS city_name')
                )
                ->orderBy('schedule.start_time', 'DESC')
                ->limit(7)
                ->get()
                ->keyBy('start_time')
                ->toArray();

            $semiResult = $webinars + $courses;

            asort($semiResult);

            $result = [];

            foreach ($semiResult as $item){
                $model = $this->factory($item['type']);
                $model->setRawAttributes($item);

                $result[] = $model;
            }

            return $result;
        }catch (\Exception $e){
            return new Collection();
        }
    }

    protected function beforeSave($attributes = [])
    {
        if(empty($attributes)) $attributes = $this->getAttributes();

        $attributes['start_time'] = \Date::getTimeFromDate($attributes['_start_date'], $attributes['_hrs'], $attributes['_mins']);

        return $attributes;
    }

    public static function create(array $attributes = [])
    {
        $attributes = self::beforeSave($attributes);

        return parent::create($attributes);
    }

    public function update(array $attributes = [], array $options = [])
    {
        $attributes = $this->beforeSave($attributes);

        return parent::update($attributes, $options);
    }
}
