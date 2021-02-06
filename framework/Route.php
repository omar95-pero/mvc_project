<?php

namespace framework;


class Route
{
    public static $extract = [];
    public static $path_controller = 'Controllers';
    public static $route = ''; //link

    public function __construct()
    {
        //$route = $_SERVER['REQUEST_URI'];
    }

    public static function get($link, $controller)
    {
        if (substr($_SERVER['REQUEST_URI'], 4) == $link or $link == '/') {
            $extract = explode('@', $controller);
            if (file_exists(self::$path_controller . '/' . $extract[0] . '.php')) {
                include self::$path_controller . '/' . $extract[0] . '.php';
                return    call_user_func(['Controllers\\' . $extract[0], $extract[1]]);
            }
        }
    }
}
