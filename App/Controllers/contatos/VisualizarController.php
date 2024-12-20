<?php

namespace App\Controllers\Contatos;

use Core\Validacao;
use App\Models\Contato;
use App\Models\Usuario;

class VisualizarController
{
    public function mostrar()
    {
        $contatos = Contato::all();

        $usuario = Usuario::all();

        $validacao = Validacao::validar([
            'senha' => ['required'],
        ], request()->all());

        if ($validacao->naoPassou()) {
            return view('contatos/index', [
                'contatos' => $contatos,
                'usuario' => $usuario
            ]);
        }

        if (! password_verify(request()->post('senha'), auth()->senha)) {
            flash()->push('validacoes', ['senha' => ['Senha incorreta!']]);

            return view('contatos/index', [
                'contatos' => $contatos,
                'usuario' => $usuario
            ]);
        }

        session()->set('mostrar', true);

        redirect('/contatos');
    }

    public function esconder()
    {
        session()->forget('mostrar');

        redirect('/contatos');
    }
}
