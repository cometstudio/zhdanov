<?php

namespace App\Models\Panel;

use App\Models\PanelModel;
use DB;

use App\Models\BaseModel;
use App\Models\UserPanelModel;

class PanelUser extends BaseModel
{
    public function panelModels()
    {
        return $this->belongsToMany('App\Models\PanelModel', 'user_panel_models', 'user_id', 'panel_model_id')->withPivot(['c','r','u','d']);
    }

    public function setPanelModelIds($panelModelIds = [])
    {
        if(!is_array($panelModelIds)) throw new \Exception;

        $userPanelModel = new UserPanelModel();

        DB::table($userPanelModel->getTable())->where('user_id', '=', $this->id)->delete();

        $affected = 0;

        if(!empty($panelModelIds)){
            foreach($panelModelIds as $panel_model_id){

                $data = [
                    'user_id'=>$this->id,
                    'panel_model_id'=>$panel_model_id,
                    'c'=>1,
                    'r'=>1,
                    'u'=>1,
                    'd'=>1,
                ];

                if($binding = $userPanelModel::create($data)) $affected++;
            }
        }

        return $affected;
    }

    public function hasAccess(PanelModel $panelModel, $accessType = '')
    {
        try{
            $currentUserPanelModels = view()->shared('currentUserPanelModels');

            if(empty($currentUserPanelModels)) throw new \Exception;

            $currentUserPanelModel = $currentUserPanelModels->find($panelModel->id);

            if(empty($currentUserPanelModel)) throw new \Exception;

            //dd($currentUserPanelModel);

            switch($accessType){
                default:
                    throw new \Exception;
                break;
                case 'c':
                    if(empty($currentUserPanelModel->pivot->c)) throw new \Exception;
                break;
                case 'r':
                    if(empty($currentUserPanelModel->pivot->r)) throw new \Exception;
                break;
                case 'u':
                    if(empty($currentUserPanelModel->pivot->u)) throw new \Exception;
                break;
                case 'd':
                    if(empty($currentUserPanelModel->pivot->d)) throw new \Exception;
                break;
            };

            return true;
        }catch (\Exception $e){
            return false;
        }
    }
}
