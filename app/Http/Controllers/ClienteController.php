<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cliente\StoreClienteRequest;
use App\Http\Requests\Cliente\UpdateClienteRequest;
use App\Models\Cliente;
use App\Models\Persona;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function  index()
    {
        $clientes = Cliente::with([
                        'persona'
                    ])
                    ->paginate(10);
        return view('ventas.cliente.inicio',compact('clientes'));
    }

    public function store(StoreClienteRequest $request)
    {
        $request->validated();

        $persona = Persona::where('numero_documento',$request->numero_documento)->first();

        if(!$persona)
        {
            $persona = Persona::create([
                'numero_documento' => $request->numero_documento,
                'nombres' => $request->nombres,
                'apellidos' => $request->apellidos,
                'telefono' => $request->telefono,
                'direccion' => $request->direccion,
                'email' => $request->email
            ]);
        }
        else {
            $persona->nombres = $request->nombres;
            $persona->apellidos = $request->apellidos;
            $persona->telefono = $request->telefono;
            $persona->direccion = $request->direccion;
            $persona->email = $request->email;
            $persona->save();
        }

        $cliente = Cliente::where('persona_id',$persona->id)->first();


        if(!$cliente)
        {
            $cliente = Cliente::create([
                'persona_id' => $persona->id,
                'es_activo' => 1
            ]);
        }
        else {
            $cliente->es_activo = ($request->es_activo) ? 1: 0;
            $cliente->save();
        }

        return response()->json([
            'ok' => 1,
            'mensaje' => 'Cliente registrado satisfactoriamente'
        ]);
    }

    public function show(Request $request)
    {
        return Cliente::with('persona')->where('id',$request->id)->first();
    }

    public function update(UpdateClienteRequest $request )
    {
        $request->validated();

        $persona = Persona::where('numero_documento',$request->numero_documento)->first();
        $persona->nombres = $request->nombres;
        $persona->apellidos = $request->apellidos;
        $persona->telefono = $request->telefono;
        $persona->direccion = $request->direccion;
        $persona->email = $request->email;
        $persona->save();

        $cliente = Cliente::where('persona_id',$request->id)->first();
        $cliente->es_activo = ($request->es_activo) ? 1: 0;
        $cliente->save();

        return response()->json([
            'ok' => 1,
            'mensaje' => 'Datos del Cliente fueron modificados satisfactoriamente'
        ]);

    }
}
