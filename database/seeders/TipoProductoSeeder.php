<?php

namespace Database\Seeders;

use App\Models\TipoProducto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoProducto::Create(['nombre'    => 'JUGOS']);
        TipoProducto::Create(['nombre'    => 'BATIDOS']);
        TipoProducto::Create(['nombre'    => 'MILKSHAKE']);
        TipoProducto::Create(['nombre'    => 'FRAPE']);
        TipoProducto::Create(['nombre'    => 'CAFES']);
        TipoProducto::Create(['nombre'    => 'EMPANADAS']);
        TipoProducto::Create(['nombre'    => 'PASTELES']);
        TipoProducto::Create(['nombre'    => 'QUEQUES']);   
        TipoProducto::Create(['nombre'    => 'TORTAS']);     
        TipoProducto::Create(['nombre'    => 'SANDWICHS']);             
        TipoProducto::Create(['nombre'    => 'TRIPLE']);
        TipoProducto::Create(['nombre'    => 'OTROS']);
    }
}
