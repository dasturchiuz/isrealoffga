<?php
/**
 * Created by PhpStorm.
 * User: iProger
 * Date: 01.03.2019
 * Time: 20:41
 */

namespace app\models;

use Yii;
use yii\base\Model;
use yii\swiftmailer\Message;

class SendEmailForm extends Model
{
    public $email;

    public function rules()
    {
        return [
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'exist',
                'targetClass' => User::classname(),
                'filter' => [
                    'status' => User::STATUS_ACTIVE
                ],
                'message' => 'Bu Email mavjud emas.'
            ],
        ];
    }

    public function attributeLabels()
    {
        return [
            'email' => 'Email'
        ];
    }

    public function sendEmail()
    {
        /* @var $user User*/
        $user = User::findOne(
            [
                'status' => User::STATUS_ACTIVE,
                'email' => $this->email
            ]
        );

        if($user):
            $user->generateSecretKey();
            if($user->save()):
                return Yii::$app->mailer->compose('resetPassword', ['user' => $user])
                    ->setForm([Yii::$app->params['supportEmail'] => Yii::$app->name.'(Sayt tomonidan yuborildi)'])
//                    ->setFrom(['testishop2@ukr.net' => 'Письмо с сайта'])
                    ->setTo($this->email) // email получателя
                    ->setSubject('Parolni tiklash uchun'.Yii::$app->name)
//                    ->setTextBody('Текст сообщения')
//                    ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
                    ->send();
            endif;
        endif;

        return false;
    }
}