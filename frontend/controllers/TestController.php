<?php

namespace frontend\controllers;
use frontend\models\Employee;
use yii\web\Controller;


class TestController extends Controller
{
    public function actionIndex(){

        $model = new Employee();
        return $this->render('index',[
        "model" => $model,
        ]);
    }
}