<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::select('id','name','email')->get();

        return view('usuario.inicio',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reglas = [
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required'
        ];
        $this->validate($request,$reglas);

        $usuario = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('usuario')->with('message','El Usuario '.$usuario->name.' fue registrado Satisfactoriamente !');
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
    public function edit(int $id)
    {
        $usuario = User::where('id',$id)->first();

        return view('usuario.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $reglas = [
            'name' => 'required|unique:users,name,'.$id,
            'email' => 'required|email|unique:users,email,'.$id
        ];
        $this->validate($request,$reglas);

        $usuario = User::where('id',$id)->first();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->save();

        return redirect('usuario')->with('message','El Usuario '.$usuario->name.' fue modificado Satisfactoriamente !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $usuario = User::where('id',$id)->first();

        $usuario->delete();

        return redirect('usuario')->with('message','El Usuario '.$usuario->name.' fue eliminado Satisfactoriamente !');
    }
}
