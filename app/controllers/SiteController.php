<?php
namespace app\controllers;

class SiteController extends \kyubi\web\Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }
}