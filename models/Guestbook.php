<?php

namespace app\models;

use Yii;

class Guestbook extends \yii\db\ActiveRecord
{
    public static function tablename()
    {
        return 'guestbook';
    }

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
            [['datetime'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
            'message' => 'Your Message'
        ];
    }

}