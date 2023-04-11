<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Asignatura;

class AsignaturaController extends Controller
{
    public function getDate(Request $request, $id){
        return Asignatura::find($id)->notas->fecha_examen;
    }
}
