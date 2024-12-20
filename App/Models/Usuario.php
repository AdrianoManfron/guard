<?php

namespace App\Models;

use Core\DB;

class Usuario
{
    public $id;

    public $nome;

    public $email;

    public $senha;

    public $avatar;

    public static function all()
    {
        $database = new DB(config('database'));

        return $database->query(
            query: 'select * from usuarios where id = :id',
            class: self::class,
            params: ['id' => auth()->id]
        )->fetchAll();
    }

    public static function atualizar($data)
    {
        $database = new DB(config('database'));

        $database->query(
            query: 'update usuarios set nome = :nome, email = :email, avatar = :avatar where id = :id',
            class: self::class,
            params: $data
        );
    }
}
