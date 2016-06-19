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
    
    public function gallery($useEmptyImage = false)
    {
        try{
            if(empty($this->gallery)) throw  new \Exception;
            
            $gallery = \Resizer::gallery($this->gallery, $useEmptyImage);

            if(empty($gallery)) throw  new \Exception;
            
            return $gallery;
        }catch (\Exception $e){
            return [];
        }
    }
    
    public function thumbnail()
    {
        $gallery = $this->gallery(true);
    
        return reset($gallery);
    }
}
