<?php

namespace framework;

class Error
{
    public function __construct($dataException = null)
    {
        if (!empty($dataException)) {
            self::view($dataException);
        }
    }
    public static function view($error)
    {
        include 'framework/errorpage.php';
    }
}
