<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\IndexForm;

class NewsController extends Controller{

    public function actionIndex(){

        $form = new IndexForm;
        $news = $form->get_news();
        return $this->render('index', ['news' => $news]);
    }

    public function actionView($id){

        $form = new IndexForm;
        $news = $form->get_news_one($id);
        return $this->render('view', ['news' => $news]);

    }
}