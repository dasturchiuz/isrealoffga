<?php

namespace app\models;

use Yii;
use yii\base\Model;

class PasswordReset extends Model
{

    public $email;
    public $user;
    public $token;
    public $passcon;
    public $pass;

    const STEP_SEND="send";
    const STEP_CHECK="chk";

    public function scenarios(){
        $scenarios = parent::scenarios();
        $scenarios[self::STEP_SEND]=['email'];
        $scenarios[self::STEP_CHECK]=['token', 'pass', 'passcon'];
        return $scenarios;
    }
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // login and password are both required
            [['email'], 'required', 'message' => Yii::t('app', 'Parol maydoni to`ldirilmadi'),  'on'=> self::STEP_SEND],
            [['token', 'pass', 'passcon'], 'required',  'message' => Yii::t('app', 'Parol maydoni to`ldirilmadi'),  'on'=> self::STEP_CHECK],
            [['passcon', 'pass'], 'string'],
            ['email', 'validateEmail'],
            ['pass', 'validatePass'],
        ];
    }


    public function validatePass($attribute, $params)
    {
        if (!$this->hasErrors()) {

            if ($this->pass!=$this->passcon) {
                $this->addError($attribute, Yii::t('app', 'Parol mos kelmayapti'));
            }
        }
    }
    public function validateEmail($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user) {
                $this->addError($attribute, Yii::t('app', 'Elektron pochta mavjud emas!'));
            }
        }
    }

    public function sendTokenEmail(){
        $token=$this->generateToken();
        if($token==false){
            return false ;
        }
        \Yii::$app->mailer->compose('resetPassword', ['username'=>$this->email, 'token'=>$token])
            ->setFrom("noreply@vebinars.uz")
            ->setTo($this->email)
            ->setSubject("Восстановление пароля для бла блаа")
            ->send();
    }


    public function generateToken(){
        $user = $this->getUser();
        $user->auth_key = \Yii::$app->security->generateRandomString();
        return $user->save(false)==true ? $user->auth_key : false;
    }


    public function getUser(){
        return \app\models\User::find()->where(['email'=>$this->email])->one();
    }

}
