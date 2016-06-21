<?php

namespace App\Models;


class Product extends BaseModel
{
    protected $fillable = [
        'active',
        'name',
        'vendor_code',
        'price',
        'audience_id',
        'teaser',
        'text',
        'recommendations',
        'gallery',
    ];

    public function getOptions()
    {
        $audiences = [
            [],
            [1, 'Cалоны', 'Для салонов'],
            [2, 'Женщины', 'Для женщин'],
            [3, 'Мужчины', 'Для мужчин'],
        ];
        
        return compact('audiences');
    }
}
