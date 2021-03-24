<?php

namespace App\Http\Controllers;

class AulaController extends Controller
{
    public function show($id = null)
    {
        echo 'exibe um ou todos os recursos';
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
