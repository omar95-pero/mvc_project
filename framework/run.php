<?php

namespace framework;

use Eloquent\eloquent;
use Errors\Error;

class Run
{
    public function __construct()
    {
        include 'include/Eloquent.php';
        include 'framework/Errors.php';
        new eloquent();
    }
}
