<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function getAll(Request $request){
        $alumno = DB::table('alumno')->get();
        return response()->json(
            [
                'success' => true,
                'message' => 'Usuarios obtenidos',
                'data' => $alumno
            ]
        );
    }

    public function getId(Request $request, $id){
        $alumno = DB::table('alumno')->where('id', $id)->get();
        return response()->json(
            [
                'success' => true,
                'message' => 'Usuario con id '. $id .' obtenido',
                'data' => $alumno
            ]
        );
    }

    public function create(Request $request){

        $validateCreate = $request->validate([
            'nombre' => 'max:32|required',
            'telefono' => 'max:16|nullable',
            'edad' => 'nullable|numeric',
            'password' => 'max:64|required',
            'email' => 'unique:alumno|email:rfc|required',
            'sexo' => 'required'
        ]);

        DB::table('alumno')->insert($validateCreate);

        return response()->json(
            [
                'success' => true,
                'message' => 'Usuario creado'
            ],
            201
        );
    }

    public function delete(Request $request, $id){
        $alumno = DB::table('alumno')->where('id', $id)->delete();
        return response()->json(
            [
                'success' => true,
                'message' => 'Usuario con id '. $id .' borrado',  
            ]
        );
    }

    public function update(Request $request, $id){
        $validateUpdate = $request->validate([
            'nombre' => 'max:32',
            'telefono' => 'max:16|nullable',
            'edad' => 'nullable|numeric',
            'password' => 'max:64',
            'email' => 'unique:alumno|email:rfc',
            'sexo' => ''
        ]);

        DB::table('alumno')->where('id', $id)->update($validateUpdate);

        return response()->json(
            [
                'success' => true,
                'message' => 'Usuario con id '. $id .' modificado'
            ]
        );
    }

    public function getCalification(Request $request, $id){
        $notas = Alumno::find($id)->notas;
        return response()->json(
            [
                'success' => true,
                'message' => 'Notas del usuario con id '. $id .' encontradas',
                'data' => $notas
            ]
        );
    }
}
