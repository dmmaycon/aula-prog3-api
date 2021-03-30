<?php

namespace App\Http\Controllers;

class AulaController extends Controller
{
    public function show($id = null)
    {
        $aulas = \App\Models\Aula::all();
        dd($aulas);
    }

    public function create()
    {
        echo 'cria um recurso';
    }

    public function update($id)
    {
        echo 'altera um recurso existente';
    }

    public function destroy($id)
    {
        echo 'deleta um recurso existente';
    }
}
