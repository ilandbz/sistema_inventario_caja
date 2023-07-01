<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoPerecederoController extends Controller
{
    public function index()
    {
        $productos = Producto::whereNotNull('fecha_vencimiento')->paginate(10);
        return view('almacen.producto-perecedero.inicio',compact('productos'));
    }
}
