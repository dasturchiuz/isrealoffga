<?php
/**
 * Created by PhpStorm.
 * User: iProger
 * Date: 01.03.2019
 * Time: 21:17
 */

namespace app\models;

use Yii;
use yii\base\Model;
use yii\base\InvalidParamException;

class ResetPasswordForm extends Model
{
    public $password;
    private $_user;


    public function rules()
    {
        return [
            ['password', 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'password' => 'Parol'
        ];
    }

    public function __construct($key, $config = [])
    {
        if(empty($key) || !is_string($key))
            throw new InvalidParamException('Kalit bo`sh bo`lmasligi kerak');
        $this->_user = User::findBySecretKey($key);
        if($this->_user)
            throw new InvalidParamException('Kalit xato kirtilgan');
        parent::__construct($config);
    }

    public function resetPassword()
    {
        /* @var $user User */
        $user = $this->_user;
        $user->setPassword($this->password);
        $user->removeSecretKey();
        return $user->save();
    }
}