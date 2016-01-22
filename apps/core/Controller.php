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
            include_once($file);
        }
        else{
            var_dump($file);
            echo '<br>';
            var_dump($class);
            die('Не удалось подключить модель');
        }
        return new $class;
    }

}

