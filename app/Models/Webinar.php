<?php

namespace App\Models;

use Illuminate\Support\Collection;

class Webinar extends BaseModel
{
    protected $fillable = [
        'name', 
        'author_id', 
        'theme_id', 
        'teaser', 
        'price',
        'start_time',
        'length_hr', 
        'length_min', 
        'text', 
        'vacancies', 
        'participants',
        'gallery',
    ];

    public function author()
    {
        return $this->hasOne('App\Models\User', 'id', 'author_id');
    }

    public function theme()
    {
        return $this->hasOne('App\Models\Theme', 'id', 'theme_id');
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

    /**
     * @param Collection $webinars
     * @param array|string $date
     * @return Collection
     */
    public function getByDate(Collection $webinars = null, $date = null)
    {
        try{
            if(empty($webinars) || !$webinars->count()) throw new \Exception;
            if(empty($date)) throw new \Exception;

            return $webinars->filter(function ($webinar) use ($date) {
                $timeFrom = \Date::getTimeFromDate($date);
                $timeTo = \Date::getTimeFromDate($date, 23, 59, 59);

                return (($webinar->start_time >= $timeFrom) && ($webinar->start_time <= $timeTo)) ? true : false;
            });
        }catch (\Exception $e){
            return new Collection();
        }
    }
}
