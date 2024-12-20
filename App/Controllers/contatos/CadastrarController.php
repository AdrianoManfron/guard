<?php

namespace App\Controllers\Contatos;

use Core\Validacao;
use App\Models\Contato;
use App\Models\Usuario;

class CadastrarController
{
    public function __invoke()
    {
        $validacao = Validacao::validar([
            'nome' => ['required', 'min:5', 'max:255'],
            'telefone' => ['required', 'min:7', 'max:14'],
            'email' => ['required', 'email']
        ], request()->all());

        if ($validacao->naoPassou()) {
            $contatos = Contato::all();

            $usuario = Usuario::all();

            return view('contatos/index', [
                'contatos' => $contatos,
                'usuario' => $usuario
            ]);
        }

        $novoNome = md5(rand());
        $extensao = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
        $avatar = "Images/$novoNome.$extensao";

        $extensao == null ? $avatar = null : "";

        move_uploaded_file($_FILES['avatar']['tmp_name'], dirname(__DIR__, 3) . '/Public/' . $avatar);

        Contato::create([
            'usuario_id' => auth()->id,
            'nome' => request()->post('nome'),
            'categoria' => encrypt(request()->post('categoria')),
            'telefone' => encrypt(request()->post('telefone')),
            'email' => encrypt(request()->post('email')),
            'avatar' => $avatar
        ]);

        flash()->push('mensage', 'Contato criado com sucesso!');
        redirect('/contatos');
    }
}
