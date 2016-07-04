<?php

namespace App\Models;

class PanelModel extends BaseModel
{
    protected $fillable = [
        'name',
        'public_model_name',
        'grid_item_view',
        'sortable',
        'has_gallery',
    ];

    public function getValidationRules()
    {
        return [
            'name'=>'required',
            'public_model_name'=>'required',
        ];
    }

    public function getValidationMessages()
    {
        return [
            'name.required'=>'Укажите название модели',
            'public_model_name.required'=>'Укажите alias модели',
        ];
    }
}
