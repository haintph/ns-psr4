<?php

namespace Hai\NsPsr4\Controllers\Client;

use Hai\NsPsr4\Commons\Controller;
class HomeController extends Controller
{
    public function index() {
        $name = 'Hai';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}