<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\TipoProducto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index()
    {
        $data['productos'] = Producto::with(['categorias:id,nombre', 'tipo_productos:id,nombre'])->get();
        //$data['productos'] = Producto::with(['categorias:id,nombre', 'tipo_productos:id,nombre'])->paginate(10);

        return view('almacen.producto.inicio',$data);
    }

    public function create()
    {
        $data['categorias'] = Categoria::get();
        $data['tipo_productos'] = TipoProducto::get();
        return view('almacen.producto.create', $data);
    }

    public function store(Request $request)
    {
        $reglas = [
            'nombre' => 'required|string|max:191',
            'precio' => 'required|numeric',
            'cantidad' => 'required|numeric',
            'tipo_id'   => 'required',
            'categoria_id' => 'required'
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
            'tipo_id' => $request->tipo_id,
            'categoria_id' => $request->categoria_id,
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

        return redirect('productos')->with(
            'message',
            'El Producto '.$prod->nombre.' fue modificado Satisfactoriamente !'
        );
    }
    public function buscarProducto(Request $request)
    {
        $buscar= mb_strtoupper($request->buscar);
        return Producto::select('id','nombre','precio','cantidad')->where(
            DB::Raw("upper(nombre)"),'like','%'.$buscar.'%')
            ->get();
    }
}
