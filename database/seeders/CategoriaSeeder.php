<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::Create(['nombre'    => 'JUGOS']);
        Categoria::Create(['nombre'    => 'BATIDOS']);
        Categoria::Create(['nombre'    => 'MILKSHAKE']);
        Categoria::Create(['nombre'    => 'FRAPE']);
        Categoria::Create(['nombre'    => 'CAFES']);
        Categoria::Create(['nombre'    => 'EMPANADAS']);
        Categoria::Create(['nombre'    => 'PASTELES']);
        Categoria::Create(['nombre'    => 'QUEQUES']);   
        Categoria::Create(['nombre'    => 'TORTAS']);  
        Categoria::Create(['nombre'    => 'SANDWICHS']);  
        Categoria::Create(['nombre'    => 'TRIPLE']);
        Categoria::Create(['nombre'    => 'OTROS']);
    }
}
