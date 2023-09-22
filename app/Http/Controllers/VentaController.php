<?php

namespace App\Http\Controllers;

use App\Models\DetalleVenta;
use App\Models\MovimientoCaja;
use App\Models\Producto;
use App\Models\Venta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = venta::with([
            'user','detalle_ventas'
        ])
        ->paginate(10);

        return view('ventas.listado',compact('ventas'));
    }

    public function create()
    {
        return view('ventas.nueva-venta.inicio');
    }

    public function anular()
    {
        return view('ventas.anular-venta');
    }

    public function guardarVenta(Request $request)
    {
        $venta = new Venta();
        $venta->fecha_venta = Carbon::now()->format('Y-m-d H:i:s');
        $venta->user_id = Auth::user()->id;
        $venta->sub_total = $request->sub_total;
        $venta->igv = $request->igv;
        $venta->total = $request->total;
        $venta->save();

        foreach($request->detalles as $detalle)
        {
            $detalle_venta = new DetalleVenta();
            $detalle_venta->venta_id = $venta->id;
            $detalle_venta->producto_id = $detalle['id'];
            $detalle_venta->cantidad = $detalle['cantidad'];
            $detalle_venta->precio_unidad = $detalle['precio'];
            $detalle_venta->importe = $detalle['importe'];
            $detalle_venta->save();

            //Actualizamos stock Producto
            $producto = Producto::where('id', $detalle['id'])->first();
            $producto->cantidad -= $detalle['cantidad'];
            $producto->save();

        }

        //Actualizamos saldo caja
        $movimientocaja = new MovimientoCaja();
        $movimientocaja->fechahora = date('Y-m-d h:i:s');
        $movimientocaja->user_id = Auth::user()->id;
        $movimientocaja->tipo = 'INGRESO';
        $movimientocaja->descripcion = 'VENTA DE PRODUCTOS CON EL ID : '.$venta->id;
        $movimientocaja->monto = $request->total;
        $movimientocaja->save();

        return response()->json([
            'ok' => 1,
            'mensaje' => 'Venta registrada satisfactoriamente'
        ]);
    }

    public function anularVenta(Request $request)
    {
        $venta = Venta::find($request->id);
        $venta->estado = 0;
        $venta->save();
        return response()->json([
            'ok' => 1,
            'mensaje' => 'Venta anulada satisfactoriamente'
        ]);
    }

    public function habilitarVenta(Request $request)
    {
        $venta = Venta::find($request->id);
        $venta->estado = 1;
        $venta->save();
        return response()->json([
            'ok' => 1,
            'mensaje' => 'Venta habilitada satisfactoriamente'
        ]);
    }
}
