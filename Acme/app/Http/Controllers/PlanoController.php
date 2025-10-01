<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plano;

class PlanoController extends Controller
{
    public function getPlanos()
    {
        $planos = Plano::all();
        return view('admin.plano', compact('planos'));
    }

    public function createPlanos(Request $request)
    {
        // Validación
        $request->validate([
            "id_modulo"     => 'required|numeric',
            "nombre_plano"  => 'required|string|min:3',
            "archivo_plano" => 'required|file|mimes:pdf,jpg,png,docx|max:2048',
            "version"       => 'required|string',
            "id_user"       => 'required|numeric',
        ]);

        // Guardar archivo en storage/app/public/planos
        $archivo = $request->file('archivo_plano')->store('planos', 'public');

        // Guardar registro en BD
        Plano::create([
            'id_modulo'     => $request->id_modulo,
            'nombre_plano'  => $request->nombre_plano,
            'archivo_plano' => $archivo,
            'version'       => $request->version,
            'id_user'       => $request->id_user,
        ]);

        return redirect()
            ->back()
            ->with('success', "Plano insertado correctamente ✅");
    }
}
