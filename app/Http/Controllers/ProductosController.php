<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index() {

        $productos = Productos::all();
        
        if(count($productos) > 0){
            return response()->json(['status' => 'OK', 'data' => $productos, 'Mensaje' => 'Registros de Productos'], 200);
        } else {
            return response()->json(['status' => 'OK', 'data' => array(), 'Mensaje' => 'Sin Registros de Productos'], 200);
        }
    }

    public function getProducto($id){

        $producto = Productos::find($id);

        if($producto){
            return response()->json(['status' => 'OK', 'data' => $producto, 'Mensaje' => 'Registro de Producto'], 200);
        } else {
            return response()->json(['status' => 'OK', 'data' => array(), 'Mensaje' => 'No Existe Registro de Producto'], 200);
        }
    }

    public function createProducto(Request $request){

        $producto = new Productos;

        $producto->nombre = $request->nombre;
        $producto->marca = $request->marca;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->save();

        if($producto){
            return response()->json(['status' => 'OK', 'data' => $producto, 'Mensaje' => 'Registro Guardado!'], 200);
        } else {
            return response()->json(['status' => 'OK', 'data' => array(), 'Mensaje' => 'No se registró el producto, vuelve a intentarlo.'], 200);
        }
    }

    public function updateProducto(Request $request, $id){

        $producto = Productos::find($id);

        $producto->nombre = $request->nombre;
        $producto->marca = $request->marca;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->save();

        if($producto){
            return response()->json(['status' => 'OK', 'data' => $producto, 'Mensaje' => 'Registro Actualizado!'], 200);
        } else {
            return response()->json(['status' => 'OK', 'data' => array(), 'Mensaje' => 'No se actualizó el producto, vuelve a intentarlo.'], 200);
        }
    }

    public function destroyProducto($id) {

        $producto = Productos::find($id);
        $producto->delete();

        if($producto){
            return response()->json(['status' => 'OK', 'data' => $producto, 'Mensaje' => 'Registro Eliminado!'], 200);
        } else {
            return response()->json(['status' => 'OK', 'data' => array(), 'Mensaje' => 'No se eliminó el producto, vuelve a intentarlo.'], 200);
        }

    }
}
