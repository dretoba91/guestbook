<?php

namespace app\controllers;

use Yii;

use yii\web\Controller;
use app\models\Guestbook;


class GuestbookController extends Controller 
{
    public function actionIndex()
    {
        $query = Guestbook::find()->all();
       return $this->render('index', [
        'guestbooks' => $query,
        
    ]);
    }


}