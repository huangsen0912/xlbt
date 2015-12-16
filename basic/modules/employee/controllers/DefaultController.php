<?php

namespace app\modules\employee\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public $layout='layout';
    public function actionIndex()
    {
        return $this->render('index');
    }
}
