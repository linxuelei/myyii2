<?php

namespace frontend\controllers;

class ProductListController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
