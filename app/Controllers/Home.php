<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('nav/head');
        echo view('index');
        echo view('nav/foot');
    }
}
