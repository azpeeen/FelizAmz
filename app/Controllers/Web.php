<?php

namespace App\Controllers;

use League\Plates\Engine;

class Web
{
    private $view;
    public function __construct()
    {
        $this->view = new Engine("app/Views/layout");
    }
    public function home()
    {
        echo $this->view->render("home");
    }
}
