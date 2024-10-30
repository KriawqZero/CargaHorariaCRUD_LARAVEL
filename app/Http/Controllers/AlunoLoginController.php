<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoLoginController extends Controller
{
    public function estudanteLoginIndex()
    {
        return view('Logins.EstudanteLogin');
    }
}
