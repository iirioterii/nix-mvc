<?php

namespace Mvc\Apps;


class Controller
{

    public function __construct()
    {
    }

    public function loadModel($model) {
        $model = ucfirst($model);
        $file  = ROOT . 'apps/models/' . $model . '.php';
        $class = preg_replace('/[^a-zA-Z0-9]/', '', $model);
        if (file_exists($file)) {
            require_once($file);
        }
        else{
            echo '<br>';
            die('Не удалось подключить модель - все плохо');
        }
        return new $class;
    }

}

