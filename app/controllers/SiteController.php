<?php
namespace app\controllers;

use kyubi\web\Controller;

class SiteController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }
}