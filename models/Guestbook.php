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
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'NAME'
        ];
    }

}