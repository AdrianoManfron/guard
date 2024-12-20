<?php

namespace App\Controllers\Contatos;

use App\Models\Contato;
use Core\Validacao;

class DeleteController
{
    public function __invoke()
    {
        $validacao = Validacao::validar([
            'id' => ['required']
        ], request()->all());

        if ($validacao->naoPassou()) {
            redirect('/contatos');
        }

        Contato::delete(
            [
                'id' => request()->post('id')
            ]
        );

        flash()->push('mensage', 'Contato deletado com sucesso!');
        redirect('/contatos');
    }
}
