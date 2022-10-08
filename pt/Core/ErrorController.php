<?php
declare(strict_types = 1);

namespace Core;

class ErrorController
{
    public function index($msg='Register not found!')
    {
        // load views
        require APP . 'views/templates/header.php';
        require APP . 'views/error/index.php';
        require APP . 'views/templates/footer.php';
    }
}

