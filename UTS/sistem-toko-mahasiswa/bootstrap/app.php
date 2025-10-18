<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php'
    )
    ->withMiddleware(function ($middleware) {
        // daftar alias middleware route
        $middleware->alias([
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
        ]);

        // jika perlu, bisa juga tambahkan ke group ‘web’ atau group khusus
        // $middleware->prependToGroup('web', SomeOtherMiddleware::class);
    })
    ->create();