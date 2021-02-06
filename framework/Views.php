<?php

namespace framework;

class Views
{
    protected static $path_folder = 'Views';
    private static $ext = '.tpl.php';
    public static function make($path_view, $args = [])
    {
        extract($args);
        include self::$path_folder . '/' . $path_view . self::$ext;
    }
}
