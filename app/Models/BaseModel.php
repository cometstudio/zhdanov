<?php

namespace App\Models;

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
}
