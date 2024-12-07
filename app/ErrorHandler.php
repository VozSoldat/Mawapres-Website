<?php

namespace App;

class ErrorHandler
{
    public static function handle404()
    {
        http_response_code(404);
        include '../resources/views/error/404.php';
    }
}