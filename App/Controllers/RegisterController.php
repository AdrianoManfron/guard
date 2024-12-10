<?php

declare(strict_types=1);

namespace App\Controllers;

class RegisterController
{
    public function index()
    {
        return view('registrar', template: 'guest');
    }
}
