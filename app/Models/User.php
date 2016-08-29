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
        'type',
        'is_author',
        'sex',
        'name',
        'city',
        'teaser',
        'email',
        'password',
        'gallery',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $configSet = 'dirs.user';

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

    public function courses()
    {
        return $this->hasMany('App\Models\Course', 'author_id', 'id');
    }

    public function packs()
    {
        return $this->hasMany('App\Models\Pack', 'user_id', 'id');
    }

    public function packedCourses()
    {
        return $this->hasManyThrough('App\Models\Pack', 'App\Models\Course', 'id', 'course_id', 'id');
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

    public function getValidationRules()
    {
        return [
            'type' => 'required',
            'name' => 'required',
            'city' => 'required',
            'email' => 'required',
        ];
    }

    public function getValidationMessages()
    {
        return [
            'type.required' => 'Укажите тип аккаунта',
            'name.required' => 'Укажите имя',
            'city.required' => 'Укажите город',
            'email.required' => 'Укажите e-mail',
            'email.email' => 'Укажите реальный e-mail'
        ];
    }

    public function getSignupValidationRules()
    {
        return [
            'type' => 'required',
            'name' => 'required',
            'city' => 'required',
            'email' => 'required|email|unique:'. $this->getTable() . ',email',
            'password' => 'required',
        ];
    }

    public function getSignupValidationMessages()
    {
        return [
            'type.required' => 'Укажите тип аккаунта',
            'name.required' => 'Укажите имя',
            'city.required' => 'Укажите город',
            'email.required' => 'Укажите e-mail',
            'email.email' => 'Укажите реальный e-mail',
            'email.unique' => 'Пользователь с указанным e-mail уже зарегистрирован',
            'password.required' => 'Укажите пароль',
        ];
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

        return compact(
            'userPanelModels'
        );
    }

    public function beforeSave($attrubutes = [])
    {

        $this->setPanelModelIds(!empty($attrubutes['_panel_model_ids']) ? $attrubutes['_panel_model_ids'] : [], !empty($attrubutes['_panel_model_crud']) ? $attrubutes['_panel_model_crud'] : [] );

        return $this;
    }

}
