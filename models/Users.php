<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property int $is_online
 * @property string $name
 * @property string $surname
 * @property string $avatar
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'name'], 'required'],
            [['is_online'], 'integer'],
            [['email'], 'string', 'max' => 50],
            [['password', 'name', 'surname', 'avatar'], 'string', 'max' => 255],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'password' => 'Password',
            'is_online' => 'Is Online',
            'name' => 'Name',
            'surname' => 'Surname',
            'avatar' => 'Avatar',
        ];
    }
}
