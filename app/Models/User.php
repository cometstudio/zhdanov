<?php

namespace App\Models;

use Auth;
use App\Models\Panel\PanelUser;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends PanelUser implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'is_author', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function($model){
            /**
             * @var $model $this
             */
            $model->setAttribute('password', self::encryptPassword($model->getAttribute('password')));
        });
    }

    protected static function encryptPassword($password = '')
    {
        return bcrypt($password);
    }

    public function isMe()
    {
        try{
            if(!Auth::check()) throw new \Exception;

            if($this->id != Auth::user()->id) throw new \Exception;

            return true;
        }catch (\Exception $e){
            return false;
        }
    }

    public function getLoginValidationRules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    public function getLoginValidationMessages()
    {
        return [
            'email.required'=>'Укажите e-mail',
            'email.email'=>'Укажите реальный e-mail',
            'password.required'=>'Укажите пароль',
        ];
    }

    public function getOptions()
    {
        $userPanelModels = $this->PanelModels()->get();

        return compact('userPanelModels');
    }

    public function setOptions($data = [])
    {
        $this->setPanelModelIds(!empty($data['_panel_model_ids']) ? $data['_panel_model_ids'] : [] );

        return $this;
    }

}
