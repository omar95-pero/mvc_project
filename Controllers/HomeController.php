<?php

namespace Controllers;

use framework\Controller;
use framework\Views;

class  HomeController extends Controller
{
    public function index()
    {
        return Views::make('home', ['title' => 'Title Of Home Page', 'message' => 'Welcome To Home Page']);
    }
}
