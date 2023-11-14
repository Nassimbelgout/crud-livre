<?php

namespace M2i\Crudlivre\Controller;

use M2i\Crudlivre\View;

class HomeController
{
    public function index()
    {
        return View::render('home');
    }
}
