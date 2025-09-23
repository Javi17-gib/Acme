<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // 👈 Importa el modelo User

class UsersController extends Controller
{
    public function getUsers()
    {
        // Obtiene todos los usuarios de la tabla users
        $usuarios = User::all();

        // Retorna la vista con la variable
        return view('admin.users', compact('usuarios'));
    }
}
