<?php

use Mvc\Apps\Model;

class Site extends Model
{

    public static function hello($param)
    {
        return "hello $param";
    }

}