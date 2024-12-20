<?php

namespace App\Models;

use Core\DB;

class Contato
{
    public $id;

    public $usuario_id;

    public $nome;

    public $categoria;

    public $telefone;

    public $email;

    public $avatar;

    public function categoria()
    {
        if (session()->get('mostrar')) {
            return decrypt($this->categoria);
        }

        return str_repeat('*', rand(10, 30));
    }

    public function telefone()
    {
        if (session()->get('mostrar')) {
            return decrypt($this->telefone);
        }

        return str_repeat('*', rand(10, 30));
    }

    public function email()
    {
        if (session()->get('mostrar')) {
            return decrypt($this->email);
        }

        return str_repeat('*', rand(10, 30));
    }

    public static function all($pesquisar = null, $pesquisaPorLetra = null)
    {
        $database = new DB(config('database'));

        return $database->query(
            query: 'select * from contatos where usuario_id = :usuario_id ' . (
                $pesquisar ? 'and nome like :pesquisar' : null
            ) . (
                $pesquisaPorLetra ? 'and nome like :pesquisaPorLetra' : null
            ),
            class: self::class,
            params: array_merge(
                [
                    'usuario_id' => auth()->id
                ],
                $pesquisar ? ['pesquisar' => "%$pesquisar%"] : [],
                $pesquisaPorLetra ? ['pesquisaPorLetra' => "$pesquisaPorLetra%"] : []
            )
        )->fetchAll();
    }

    public static function create($data)
    {
        $database = new DB(config('database'));

        $database->query(
            query: 'insert into contatos ( usuario_id, nome, categoria, telefone, email, avatar ) values ( :usuario_id, :nome, :categoria, :telefone, :email, :avatar )',
            class: self::class,
            params: $data
        );
    }

    public static function update($data)
    {
        $database = new DB(config('database'));

        $database->query(
            query: 'update contatos set nome = :nome,
                                              categoria = :categoria,
                                              telefone = :telefone,
                                              email = :email,
                                              avatar = :avatar
                          where id = :id',
            class: self::class,
            params: $data
        );
    }

    public static function delete($data)
    {
        $database = new DB(config('database'));

        $database->query(
            query: 'delete from contatos where id = :id',
            class: self::class,
            params: $data
        );
    }
}
