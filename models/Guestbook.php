<?php

namespace app\models;

use Yii;
// use yii\base\Model;

class Guestbook extends \yii\db\ActiveRecord 
{
    public static function tablename()
    {
        return 'guestbook';
    }

    public function rules()
    {
        return [
            [['name', 'email'], 'required']
        ];
    }

    public function attributeLables()
    {
        return [
            'name' => 'NAME'

        ];
    }

}
