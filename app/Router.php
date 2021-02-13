<?php

namespace App;

use Exception;
use Pecee\Http\Middleware\Exceptions\TokenMismatchException;
use Pecee\SimpleRouter\Exceptions\HttpException;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

class Router extends SimpleRouter
{
    /**
     * @throws Exception
     * @throws TokenMismatchException
     * @throws HttpException
     * @throws NotFoundHttpException
     */
    public static function start(): void
    {
        // Load our helpers
        require_once __DIR__ . '/Helpers/helpers.php';

        // Load our custom routes
        require_once __DIR__ . './../routes/web.php';
        require_once __DIR__ . './../routes/api.php';

        // Do initial stuff
        parent::start();
    }

}
