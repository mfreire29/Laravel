<?php

namespace App\Http\Controllers;

use App\Models\Consultas;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    public function index() {

        $consultas = Consultas::all();
        
        if(count($consultas) > 0){
            return response()->json(['status' => 'OK', 'data' => $consultas, 'Mensaje' => 'Registros de Productos'], 200);
        } else {
            return response()->json(['status' => 'OK', 'data' => array(), 'Mensaje' => 'Sin Registros de Productos'], 200);
        }
    }
}
