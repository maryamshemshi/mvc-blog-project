<?php

namespace App\Controllers;

use App\View;

class AboutController
{
    public function aboutUs()
    {
        echo View::loadView("aboutUs");
    }

    public function contactUs()
    {
        echo view::loadView('contactUs');
    }

}
