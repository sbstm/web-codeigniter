<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {


        return view('welcome_message');
    }

    public function bima()
    {

        return view('welcome_message');
    }
}
