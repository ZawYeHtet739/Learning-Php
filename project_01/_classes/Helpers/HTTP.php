<?php

// namespace Helpers;
namespace _classes\Helpers;

class HTTP
{
    static $base = "http://localhost/Learning-Php/project_01";

    static function redirect($path, $query = "")
    {
        $url = static::$base . $path;
        if ($query)
            $url .= "?$query";

        header("location: $url");
        exit();
    }
}