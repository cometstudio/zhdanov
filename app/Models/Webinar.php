<?php

namespace App\Models;


class Webinar extends BaseModel
{
    protected $fillable = [
        'name', 
        'author_id', 
        'theme_id', 
        'teaser', 
        'price', 
        'length_hr', 
        'length_min', 
        'text', 
        'vacancies', 
        'participants',
        'gallery',
        'start_date'
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

        return $attributes;
    }

    public static function create_(array $attributes = [])
    {
        $attributes = self::beforeSave($attributes);

        return parent::create($attributes);
    }

    public function update_(array $attributes = [], array $options = [])
    {
        $attributes = $this->beforeSave($attributes);

        return parent::update($attributes, $options);
    }
}
