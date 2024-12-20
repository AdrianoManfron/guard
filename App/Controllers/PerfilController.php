<?php

namespace App\Controllers;

use Core\Validacao;
use App\Models\Usuario;

class PerfilController
{
    public function index()
    {
        $usuario = Usuario::all();

        return view('perfil', [
            'usuario' => $usuario
        ]);
    }

    public function atualizar()
    {
        $validacao = Validacao::validar([
            'nome' => ['required', 'min:2', 'max:255'],
            'email' => ['required', 'email']
        ], request()->all());

        if ($validacao->naoPassou()) {
            redirect('perfil');
        }

        $novoNome = md5(rand());
        $extensao = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
        $avatar = "Images/$novoNome.$extensao";

        $extensao == null ? $avatar = null : "";

        move_uploaded_file($_FILES['avatar']['tmp_name'], dirname(__DIR__, 2) . '/Public/' . $avatar);

        Usuario::atualizar([
            'id' => auth()->id,
            'nome' => request()->post('nome'),
            'email' => request()->post('email'),
            'avatar' => $avatar
        ]);

        flash()->push('mensage', 'Usuário atualizado com sucesso!');
        redirect('/perfil');
    }
}
