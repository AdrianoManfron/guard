<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\DB;
use Core\Validacao;

class RegisterController
{
    public function index()
    {
        return view('registrar', template: 'guest');
    }

    public function Register()
    {
        $validacao = Validacao::validar([
            'nome' => ['required'],
            'email' => ['required', 'email', 'confirmed', 'unique:usuarios'],
            'senha' => ['required', 'min:8', 'max:30', 'strong'],
        ], request()->all());

        if ($validacao->naoPassou()) {
            return view('registrar', template: 'guest');
        }

        $database = new DB(config('database'));

        $database->query(
            query: 'insert into usuarios ( nome, email, senha ) values ( :nome, :email, :senha )',
            params: [
                'nome' => request()->post('nome'),
                'email' => request()->post('email'),
                'senha' => password_hash(request()->post('senha'), PASSWORD_DEFAULT),
            ]
        );

        flash()->push('mensage', 'Registrado com sucesso!');
        redirect('/login');
    }
}
