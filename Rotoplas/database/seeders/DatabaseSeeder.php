<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\productosModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $producto = new productosModel();

        $producto->nombre = 'Tuboplus';
        $producto->precio = 1000;
        $producto->descripcion = 'Tuboplus de 1/2';
        $producto->stock = 100;
        $producto->id_categoria = 1;
        $producto->save();

        $producto1 = new productosModel();

        $producto1->nombre = 'Rotoplas';
        $producto1->precio = 5000;
        $producto1->descripcion = 'Rotoplas de 1000 litros';
        $producto1->stock = 100;
        $producto1->id_categoria = 3;
        $producto1->save();

        $producto2 = new productosModel();

        $producto2->nombre = 'Purificador de agua';
        $producto2->precio = 3000;
        $producto2->descripcion = 'Purificador de agua de 1/2';
        $producto2->stock = 100;
        $producto2->id_categoria = 4;
        $producto2->save();

        $producto3 = new productosModel();

        $producto3->nombre = 'Filtro de agua';
        $producto3->precio = 2500;
        $producto3->descripcion = 'Filtro de agua de 1/2';
        $producto3->stock = 100;
        $producto3->id_categoria = 4;
        $producto3->save();

        }
}
