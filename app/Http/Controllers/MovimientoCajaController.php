<?php

namespace App\Http\Controllers;

use App\Models\MovimientoCaja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovimientoCajaController extends Controller
{
    public function store(Request $request)
    {
        $reglas = [
            'tipo' => 'required',
            'descripcion' => 'required|string',
        ];
        $this->validate($request,$reglas);


        MovimientoCaja::firstOrCreate([
            'fechahora' => date('Y-m-d h:i:s'),
            'user_id' => Auth::user()->id,
            'tipo' => $request->tipo,
            'descripcion' => $request->descripcion,
            'monto' => $request->monto
        ]);

        // $usuario = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ]);

        return redirect('administrar-caja')->with('message','fue registrado Satisfactoriamente !');
    }
    public function movimientos(){
        $data['movimientos']=MovimientoCaja::with('usuario:id,name')->whereDate('fechahora', date('Y-m-d'))->get();
        return view('caja.administrar-caja.movimientos', $data);
    }
}
