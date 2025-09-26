<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // 👈 Importa el modelo User

class UsersController extends Controller
{
    public function getUsers()
    {
        $usuarios = User::all();
        return view('admin.users', compact('usuarios'));
    }

}
