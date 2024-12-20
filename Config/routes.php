<?php

declare(strict_types=1);

use Core\Route;
use App\Controllers\Contatos;
use App\Middlewares\AuthMiddleware;
use App\Controllers\IndexController;
use App\Controllers\LoginController;
use App\Middlewares\GuestMiddleware;
use App\Controllers\LogoutController;
use App\Controllers\PerfilController;
use App\Controllers\RegisterController;

(new Route())

    // Não autenticado
    ->get('/', IndexController::class, GuestMiddleware::class)
    ->get('/login', [LoginController::class, 'index'], GuestMiddleware::class)
    ->post('/login', [LoginController::class, 'login'], GuestMiddleware::class)
    ->get('/registrar', [RegisterController::class, 'index'], GuestMiddleware::class)
    ->post('/registrar', [RegisterController::class, 'register'], GuestMiddleware::class)

    // Autenticado
    ->get('/logout', LogoutController::class, AuthMiddleware::class)
    ->get('/contatos', Contatos\IndexController::class, AuthMiddleware::class)
    ->post('/contatos', Contatos\CadastrarController::class, AuthMiddleware::class)
    ->put('/contato', Contatos\AtualizarController::class, AuthMiddleware::class)
    ->delete('/contato', Contatos\DeleteController::class, AuthMiddleware::class)
    ->get('/perfil', [PerfilController::class, 'index'], AuthMiddleware::class)
    ->post('/perfil', [PerfilController::class, 'atualizar'], AuthMiddleware::class)

    ->post('/mostrar', [Contatos\VisualizarController::class, 'mostrar'], AuthMiddleware::class)
    ->get('/esconder', [Contatos\VisualizarController::class, 'esconder'], AuthMiddleware::class)

    ->run();
