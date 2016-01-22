<?php

namespace Mvc\Apps;

class Templater
{
    public $cont = '';

    public function load($page, $data=null) {

        // Если есть файл с таким именем то подключаем и кидаем в шаблон
        if (file_exists(PAGES_PATH . $page . '.phtml')) {
            ob_start();
            require_once PAGES_PATH . $page . '.phtml';
            $this->cont = ob_get_clean();
            require_once  $_SERVER["DOCUMENT_ROOT"] . LAYOUT_PATH;
            return ob_get_clean();
        // Если файла нет, подключаем 404
        } else {
            require_once PAGES_PATH . '404.phtml';
            $this->cont = ob_get_clean();
            require_once  $_SERVER["DOCUMENT_ROOT"] . LAYOUT_PATH;
            return ob_get_clean();
        }

    }

}


