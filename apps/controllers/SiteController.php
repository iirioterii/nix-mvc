<?php

use Mvc\Apps\Controller;

class SiteController extends Controller
{

    public function actionIndex()
    {
        echo 'это акшн index';
    }

    public function actionHello($param)
    {
        echo 'Акшен hello отработал <br>';
        echo 'Параметр:' . $param;
        $modelSite = $this->loadModel('site');
        $hello = $modelSite->hello($param);
        echo $hello;
    }

}


