<?php

namespace frontend\controllers;

class IndexController extends \yii\web\Controller
{
    public function actionIndex()
    {
        echo 'asdf';
        return $this->render('index');
    }

}
