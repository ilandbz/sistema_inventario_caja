<?php

namespace App\Http\Controllers;

use App\Models\HistorialCaja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministrarCajaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historial_cajas = HistorialCaja::select('fecha_apertura','monto_apertura')->where(
            DB::Raw("CAST(fecha_apertura AS DATE)"),'=',date('Y-m-d')
        )
        ->where('estado',0)
        ->first();
        return view('caja.administrar-caja.inicio', compact('historial_cajas'));
    }

    public function vistaAbrirCaja()
    {
        return view('caja.administrar-caja.abrir-caja');
    }


    public function controlAbrirCaja(Request $request)
    {
        $reglas = [
            'monto_inicial' => 'required|numeric'
        ];

        $mensajes = [
            'required' => '* campo obligatorio',
            'numeric' => 'Ingrese Solo números',
            'string' => 'Ingrese caracteres alfanuméricos',
            'max' => 'Máximo :max caracteres'
        ];

        $this->validate($request,$reglas, $mensajes);

        $historial = new HistorialCaja();
        $historial->fecha_apertura = date('Y-m-d H:i:s');
        $historial->monto_apertura = $request->monto_inicial;
        $historial->estado = 0;
        $historial->save();

        return redirect('administrar-caja')->with('message','Caja aperturada, El Monto Inicial S/ '.$historial->monto_apertura.' fue registrado Satisfactoriamente !');
    }

    public function vistaCerrarCaja() {
        $historial_caja = HistorialCaja::select('fecha_apertura','monto_apertura')->where(
            DB::Raw("CAST(fecha_apertura AS DATE)"),'=',date('Y-m-d')
        )
        ->where('estado',0)
        ->first();
        return view('caja.administrar-caja.cerrar-caja',compact('historial_caja'));
    }

    public function controlCerrarCaja(Request $request)
    {
        $reglas = [
            'monto_final' => 'required|numeric'
        ];

        $mensajes = [
            'required' => '* campo obligatorio',
            'numeric' => 'Ingrese Solo números',
            'string' => 'Ingrese caracteres alfanuméricos',
            'max' => 'Máximo :max caracteres'
        ];

        $this->validate($request,$reglas, $mensajes);

        $historial = HistorialCaja::where(DB::Raw("CAST(fecha_apertura as DATE)"),date('Y-m-d'))
                        ->first();

        $historial->fecha_cierre = date('Y-m-d H:i:s');
        $historial->monto_cierre = $request->monto_final;
        $historial->estado = 1;
        $historial->save();

        return redirect('administrar-caja')->with('message','La Caja fue cerrada, El Monto Final S/ '.$historial->monto_cierre.' fue registrado Satisfactoriamente !');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
