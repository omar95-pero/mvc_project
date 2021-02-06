<?php

namespace framework;

class Views
{
    protected $path_folder = 'Views';
    private $ext = '.tpl.php';
    public static function make($path_view, $args = [])
    {
        include $this->path_folder . '/' . $path_view . $this->ext;
    }
}
