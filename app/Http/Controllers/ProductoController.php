<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::paginate(10);
        return view('almacen.producto.inicio',compact('productos'));
    }

    public function create()
    {
        return view('almacen.producto.create');
    }

    public function store(Request $request)
    {
        $reglas = [
            'nombre' => 'required|string|max:191',
            'precio' => 'required|numeric',
            'cantidad' => 'required|numeric',
        ];
        $mensajes = [
            'required' => '* campo oblogatorio',
            'numeric' => 'Ingrese Solo números',
            'string' => 'Ingrese caracteres alfanuméricos',
            'max' => 'Máximo :max caracteres'
        ];

        $this->validate($request,$reglas, $mensajes);

        $producto = Producto::create([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'cantidad' => $request->cantidad,
            'fecha_vencimiento' => $request->fecha_vencimiento
        ]);

        return redirect('productos')->with('message','El Producto '.$producto->nombre.' fue registrado Satisfactoriamente !');
    }

    public function edit(int $id)
    {
        $producto = Producto::where('id',$id)->first();

        return view('almacen.producto.edit',compact('producto'));
    }

    public function update(Request $request, int $id)
    {
        $reglas = [
            'nombre' => 'required|string|max:191',
            'precio' => 'required|numeric',
            'cantidad' => 'required|numeric',
        ];
        $mensajes = [
            'required' => '* campo obligatorio',
            'numeric' => 'Ingrese Solo números',
            'string' => 'Ingrese caracteres alfanuméricos',
            'max' => 'Máximo :max caracteres'
        ];

        $this->validate($request,$reglas, $mensajes);



        $producto = Producto::where('id',$id)->update([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'cantidad' => $request->cantidad
        ]);

        $prod = Producto::find($id);

        return redirect('productos')->with('message','El Producto '.$prod->nombre.' fue modificado Satisfactoriamente !');
    }
}
