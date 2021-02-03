<?php

namespace framework;

use Eloquent\eloquent;

class Run
{
    public function __construct()
    {
        include 'include/Eloquent.php';
        new eloquent();
    }
}
