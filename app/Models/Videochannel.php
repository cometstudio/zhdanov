<?php

namespace App\Models;

class Videochannel extends BaseModel
{
    protected $table = 'videochannel';

    protected $fillable = [
        'name',
        'url',
        'teaser',
        'text',
        'gallery'
    ];
}
