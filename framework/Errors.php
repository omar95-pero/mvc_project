<?php

namespace Errors;

class Error
{
    public function __construct($dataException)
    {
        $error = $dataException;
        include 'framework/errorpage.php';
    }
}
