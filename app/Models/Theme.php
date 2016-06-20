<?php

namespace App\Models;


class Theme extends BaseModel
{
    protected $fillable = [
        'name',
    ];

    public function lessons()
    {
        return $this->hasMany('App\Models\Lesson');
    }
}
