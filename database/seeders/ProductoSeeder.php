<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\TipoProducto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productos = [
            [
                'tipo_id' => TipoProducto::where('nombre', 'JUGOS')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'JUGOS')->value('id'),
                'nombre' => 'JUGO DE FRESA',
                'precio'    => 6.00,
                'cantidad'  => 10,
            ],
            [
                'tipo_id' => TipoProducto::where('nombre', 'JUGOS')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'JUGOS')->value('id'),
                'nombre' => 'JUGO DE PAPAYA',
                'precio'    => 6.00,
                'cantidad'  => 10,
            ],
            [
                'tipo_id' => TipoProducto::where('nombre', 'JUGOS')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'JUGOS')->value('id'),
                'nombre' => 'JUGO DE PIÑA',
                'precio'    => 6.00,
                'cantidad'  => 10,
            ],
            [
                'tipo_id' => TipoProducto::where('nombre', 'JUGOS')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'JUGOS')->value('id'),
                'nombre' => 'JUGO DE MANGO',
                'precio'    => 6.00,
                'cantidad'  => 10,
            ],
            //------------------------------------------------------------------
            [
                'tipo_id' => TipoProducto::where('nombre', 'BATIDOS')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'BATIDOS')->value('id'),
                'nombre' => 'BATIDO DE FRESA',
                'precio'    => 7.00,
                'cantidad'  => 10,
            ],
            [
                'tipo_id' => TipoProducto::where('nombre', 'BATIDOS')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'BATIDOS')->value('id'),
                'nombre' => 'BATIDO DE LUCMA',
                'precio'    => 7.00,
                'cantidad'  => 10,
            ],
            [
                'tipo_id' => TipoProducto::where('nombre', 'BATIDOS')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'BATIDOS')->value('id'),
                'nombre' => 'BATIDO DE MANGO',
                'precio'    => 7.00,
                'cantidad'  => 10,
            ],
            [
                'tipo_id' => TipoProducto::where('nombre', 'MILKSHAKE')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'MILKSHAKE')->value('id'),
                'nombre' => 'MILSHAKE DE FRESA',
                'precio'    => 8.00,
                'cantidad'  => 10,
            ],
            [
                'tipo_id' => TipoProducto::where('nombre', 'MILKSHAKE')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'MILKSHAKE')->value('id'),
                'nombre' => 'MILSHAKE DE CHOCOLATE',
                'precio'    => 8.00,
                'cantidad'  => 10,
            ],
            [
                'tipo_id' => TipoProducto::where('nombre', 'MILKSHAKE')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'MILKSHAKE')->value('id'),
                'nombre' => 'MILSHAKE DE OREO',
                'precio'    => 8.00,
                'cantidad'  => 10,
            ],

            [
                'tipo_id' => TipoProducto::where('nombre', 'FRAPE')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'FRAPE')->value('id'),
                'nombre' => 'FRAPE DE FRESA',
                'precio'    => 8.00,
                'cantidad'  => 10,
            ],
            [
                'tipo_id' => TipoProducto::where('nombre', 'FRAPE')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'FRAPE')->value('id'),
                'nombre' => 'FRAPE DE CHOCOLATE',
                'precio'    => 8.00,
                'cantidad'  => 10,
            ],
            [
                'tipo_id' => TipoProducto::where('nombre', 'SANDWICHS')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'SANDWICHS')->value('id'),
                'nombre' => 'SANDWICH DE POLLO',
                'precio'    => 5.00,
                'cantidad'  => 10,
            ],
            [
                'tipo_id' => TipoProducto::where('nombre', 'SANDWICHS')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'SANDWICHS')->value('id'),
                'nombre' => 'SANDWICH MIXTO',
                'precio'    => 5.00,
                'cantidad'  => 10,
            ],

            [
                'tipo_id' => TipoProducto::where('nombre', 'TRIPLE')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'TRIPLE')->value('id'),
                'nombre' => 'TRIPLES DE POLLO JAMON Y QUESO Y DRURAZNO',
                'precio'    => 8.00,
                'cantidad'  => 10,
            ],
            [
                'tipo_id' => TipoProducto::where('nombre', 'TRIPLE')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'TRIPLE')->value('id'),
                'nombre' => 'TRIPLE DE TOMATE PALTA Y POLLO',
                'precio'    => 8.00,
                'cantidad'  => 10,
            ],

            [
                'tipo_id' => TipoProducto::where('nombre', 'CAFES')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'CAFES')->value('id'),
                'nombre' => 'CAFE PASADO',
                'precio'    => 3.00,
                'cantidad'  => 10,
            ],
            [
                'tipo_id' => TipoProducto::where('nombre', 'CAFES')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'CAFES')->value('id'),
                'nombre' => 'LATE HELADO',
                'precio'    => 5.00,
                'cantidad'  => 10,
            ],
            [
                'tipo_id' => TipoProducto::where('nombre', 'CAFES')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'CAFES')->value('id'),
                'nombre' => 'TE, ANIS O MANZANILLA',
                'precio'    => 2.00,
                'cantidad'  => 10,
            ],
            [
                'tipo_id' => TipoProducto::where('nombre', 'TORTAS')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'TORTAS')->value('id'),
                'nombre' => 'TAJADA',
                'precio'    => 2.00,
                'cantidad'  => 10,
            ],
            [
                'tipo_id' => TipoProducto::where('nombre', 'OTROS')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'OTROS')->value('id'),
                'nombre' => 'BOCADITOS X CIENTO',
                'precio'    => 2.00,
                'cantidad'  => 10,
            ],
            [
                'tipo_id' => TipoProducto::where('nombre', 'OTROS')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'OTROS')->value('id'),
                'nombre' => 'BOCADITOS X MEDIO CIENTO',
                'precio'    => 2.00,
                'cantidad'  => 10,
            ],
            [
                'tipo_id' => TipoProducto::where('nombre', 'OTROS')->value('id'),
                'categoria_id' => Categoria::where('nombre', 'OTROS')->value('id'),
                'nombre' => 'BOCADITOS X DOCENA',
                'precio'    => 2.00,
                'cantidad'  => 10,
            ],            
        ];
        foreach ($productos as $menuData) {
            $producto = Producto::firstOrCreate($menuData);
        }
    }
}
