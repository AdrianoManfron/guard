<?php

namespace App\Controllers\Contatos;

use App\Models\Contato;
use App\Models\Usuario;

class IndexController
{
    public function __invoke()
    {
        $pesquisar = request()->get('pesquisar', null);

        $pesquisaPorLetra = request()->get('pesquisaPorLetra', null);

        $contatos = Contato::all($pesquisar, $pesquisaPorLetra);

        $usuario = Usuario::all();

        return view('contatos/index', [
            'contatos' => $contatos,
            'usuario' => $usuario
        ]);
    }
}
