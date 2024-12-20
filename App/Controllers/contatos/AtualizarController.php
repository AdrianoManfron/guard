<?php

namespace App\Controllers\Contatos;

use App\Models\Contato;
use Core\Validacao;

class AtualizarController
{
    public function __invoke()
    {
        $validacao = Validacao::validar([
            'id' => ['required'],
            'nome' => ['required', 'min:5', 'max:255'],
            'telefone' => ['required', 'min:7', 'max:14'],
            'email' => ['required', 'email']
        ], request()->all());

        if ($validacao->naoPassou()) {
            redirect('/contatos');
        }

        $novoNome = md5(rand());
        $extensao = pathinfo($_FILES['avatarContato']['name'], PATHINFO_EXTENSION);
        $avatar = "Images/$novoNome.$extensao";

        $extensao == null ? $avatar = null : "";

        move_uploaded_file($_FILES['avatarContato']['tmp_name'], dirname(__DIR__, 3) . '/Public/' . $avatar);

        Contato::update(
            [
                'id' => request()->post('id'),
                'nome' => request()->post('nome'),
                'categoria' => encrypt(request()->post('categoria')),
                'telefone' => encrypt(request()->post('telefone')),
                'email' => encrypt(request()->post('email')),
                'avatar' => $avatar
            ]
        );

        flash()->push('mensage', 'Contato atualizado com sucesso!');
        redirect('/contatos');
    }
}
