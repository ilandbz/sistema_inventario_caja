<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        return view('ventas.listado');
    }

    public function create()
    {
        return view('ventas.nueva-venta.inicio');
    }

    public function anular()
    {
        return view('ventas.anular-venta');
    }
}
