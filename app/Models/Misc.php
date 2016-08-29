<?php

namespace App\Models;


class Misc extends BaseModel
{
    protected $table = 'misc';

    protected $fillable = [
        'name',
        'text',
        'raw',
        'gallery',
        'title',
        'meta_description',
        'meta_keywords',
    ];

    protected $configSet = 'dirs.misc';
}
