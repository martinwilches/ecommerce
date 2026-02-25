<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function() { // registrar un nuevo archivo de ruta de tipo web
            Route::middleware('web', 'auth') // el middleware auth permite el acceso a la ruta solo para usuarios autenticados
                ->prefix('admin') // prefijo de las rutas
                ->name('admin.') // especificar el prefijo del nombre de las rutas
                ->group(base_path('routes/admin.php')); // ruta donde se localiza el archivo de rutas
        }
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
