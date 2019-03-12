<?php

namespace app\models;


use yii\base\Model;

class SignupForm extends Model
{
    public $name;
    public $fam;
    public $otec;
    public $birth_date;
    public $pol;
    public $tel;
    public $email;
    public $login;
    public $password;

    public function rules()
    {
        return [
            [['name', 'fam', 'otec', 'birth_date', 'tel', 'login', 'password'], 'required'],
            [['tel'], 'integer'],
            [['tel'], 'unique', 'targetClass' => 'app\models\User', 'targetAttribute' => 'tel'],
            [['name'], 'string'],
            [['fam'], 'string'],
            [['otec'], 'string'],
            [['birth_date'], 'string'],
            [['pol'], 'string'],
            [['login'], 'string'],
            [['login'], 'unique', 'targetClass' => 'app\models\User', 'targetAttribute' => 'login'],
            [['email'], 'email'],
            [['email'], 'unique', 'targetClass' => 'app\models\User', 'targetAttribute' => 'email']
        ];
    }

    public function signup()
    {
        if($this->validate())
        {
            $user = new User();
            $user->attributes = $this->attributes;
            return $user->create();
        }
    }
}