<?php

namespace App\Controllers;

class admin extends BaseController
{
    public function index()
    {
        echo view('nav/head');
        echo view('index');
        echo view('nav/foot');
    }
}
