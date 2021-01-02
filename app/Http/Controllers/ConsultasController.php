<?php

namespace App\Http\Controllers;

use App\Models\Consultas;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    public function index() {

        $consultas = Consultas::orderBy('id', 'desc')->get();
        
        if(count($consultas) > 0){
            return response()->json(['status' => 'OK', 'data' => $consultas, 'Mensaje' => 'Registros de Productos'], 200);
        } else {
            return response()->json(['status' => 'OK', 'data' => array(), 'Mensaje' => 'Sin Registros de Productos'], 200);
        }
    }

    public function destroyConsulta($id) {

        $consulta = Consultas::find($id);
        $consulta->delete();

        if($consulta){
            return response()->json(['status' => 'OK', 'data' => $consulta, 'Mensaje' => 'Registro Eliminado!'], 200);
        } else {
            return response()->json(['status' => 'OK', 'data' => array(), 'Mensaje' => 'No se eliminó el producto, vuelve a intentarlo.'], 200);
        }

    }
}
