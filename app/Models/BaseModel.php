<?php

namespace App\Models;

use App;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $dateFormat = 'U';

    public function getValidationRules()
    {
        return [];
    }

    public function getValidationMessages()
    {
        return [];
    }
    
    public function getGallery($useEmptyImage = false)
    {
        try{
            $gallery = \Resizer::gallery($this->gallery, $useEmptyImage);

            if(empty($gallery)) throw  new \Exception;
            
            return $gallery;
        }catch (\Exception $e){
            return [];
        }
    }
    
    public function getThumbnail()
    {
        $gallery = $this->getGallery(true);
    
        return reset($gallery);
    }

    public function getStartDate()
    {
        return \Date::getDateFromTime($this->start_time, 1);
    }

    /**
     * Factory a model object by its public name (URL alias)
     * @param string $modelName
     * @return \Illuminate\Database\Eloquent\Model
     * @throws \Exception
     */
    protected function factory($modelName = '')
    {
        $modelClassName = studly_case($modelName);

        $modelClassPath = '\App\Models\\'.$modelClassName;

        if(!class_exists($modelClassPath)) throw new \Exception('Model '.$modelClassName.' does not exist');

        $model = App::make($modelClassPath);

        return $model;
    }
}
