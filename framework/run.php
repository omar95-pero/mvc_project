<?php

namespace framework;

use Eloquent\eloquent;
use framework\Error;
use framework\Views;
use framework\Controller;
use framework\Models;
use framework\Route;

class Run
{
    public function __construct()
    {
        require_once 'include/Eloquent.php';
        require_once 'framework/Errors.php';
        require_once 'framework/Views.php';
        require_once 'framework/Controller.php';
        require_once 'framework/Models.php';
        require_once 'framework/Route.php';
        require_once 'routes.php';
        new eloquent();
        new Error();
        new Views();
        new Controller();
        new Models();
        new Route();
    }
}
