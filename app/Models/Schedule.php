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

    public function users()
    {
        return $this->hasManyThrough('App\Models\User', 'App\Models\UserSchedule', 'schedule_id', 'id');
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
            $builder = Webinar::join('users', 'webinars.author_id', '=', 'users.id')
                ->select(
                    'webinars.*',
                    \DB::raw('"webinar" AS type'),
                    \DB::raw('users.name AS author_name')
                )
                ->orderBy('webinars.start_time', 'DESC')
                ->limit($quantity);

                if(!empty($authorId))  $builder = $builder->where('webinars.author_id', '=', $authorId);

            $webinars = $builder->get()
                    ->keyBy('start_time')
                    ->toArray();

            $builder = Course::join('schedule', 'schedule.course_id', '=', 'courses.id')
                ->join('users', 'courses.author_id', '=', 'users.id')
                ->join('cities', 'schedule.city_id', '=', 'cities.id')
                ->select(
                    'courses.*',
                    'schedule.start_time',
                    \DB::raw('"course" AS type'),
                    \DB::raw('users.name AS author_name'),
                    \DB::raw('cities.name AS city_name')
                )
                ->orderBy('schedule.start_time', 'DESC')
                ->limit($quantity);

                if(!empty($authorId))  $builder = $builder->where('courses.author_id', '=', $authorId);

            $courses = $builder->get()
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

            $result = array_slice($result, 0, $quantity);

            return $result;
        }catch (\Exception $e){
            return new Collection();
        }
    }

    public function beforeSave($attrubutes = [])
    {
        $this->setStartTime($attrubutes);

        return $this;
    }
}
