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
        'text',
        'video',
        'gallery',
        'price',
        'start_time',
        'length_hr', 
        'length_min',
        'vacancies', 
        'participants',
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

    /**
     * @param Collection $webinars
     * @param array|string $date
     * @return Collection
     */
    public function getByDate(Collection $webinars = null, $date = '')
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

    public function beforeSave($attrubutes = [])
    {
        $this->setStartTime($attrubutes);
        
        return $this;
    }
}
