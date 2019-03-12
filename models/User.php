<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;
use yii\swiftmailer\Message;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $fam
 * @property string $otec
 * @property string $birth_date
 * @property string $pol
 * @property int $tel
 * @property string $email
 * @property string $login
 * @property string $password
 * @property int $isAdmin
 * @property string $avatar
 * @property string $secret_key
 *
 * @property Comment[] $comments
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    const STATUS_ACTIVE = 0;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['birth_date'], 'safe'],
            [['isAdmin', 'tel'], 'integer'],
            [['name', 'fam', 'otec', 'pol', 'email', 'login', 'password', 'avatar'], 'string', 'max' => 255],
            ['secret_key', 'unique']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'fam' => 'Fam',
            'otec' => 'Otec',
            'birth_date' => 'Birth Date',
            'pol' => 'Pol',
            'tel' => 'Tel',
            'email' => 'Email',
            'login' => 'Login',
            'password' => 'Password',
            'isAdmin' => 'Is Admin',
            'avatar' => 'Avatar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['user_id' => 'id']);
    }

    public static function findIdentity($id)
    {
        return User::findOne($id);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }

    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }

    public static function findByLogin($login)
    {
        return User::find()->where(['login' => $login])->one();
    }


    public static function findBySecretKey($key)
    {
        if(!static::isSecretKeyExpire($key))
        {
            return null;
        return static::findOne(
            [
                'secret_key' => $key
            ]
        );
        }
    }

    public function generateSecretKey()
    {
        $this->secret_key = Yii::$app->security->generateRandomString().'_'.time();
    }

    public function removeSecretKey()
    {
        $this->secret_key = null;
    }

    public static function isSecretKeyExpire($key)
    {
        if(empty($key))
        {
            return false;
        $expire = Yii::$app->params['secretKeyExpire'];
        $parts = explode('_', $key);
        $timestamp = (int) end($parts);
        return $timestamp + $expire >= time();
        }
    }


    public function validatePassword($password)
    {
        return ($this->password == $password) ? true : false;
    }

    public function create()
    {
        return $this->save(false);
    }
}
