<?php

namespace Database\Seeders;


use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Inventario;
use App\Models\Producto;
use App\Models\Venta;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        Cliente::factory(10)->create();
        Venta::factory(100)->create();
        Producto::factory(10)->create();
       

        //Relación muchos a muchos

        $productos = Producto::all();
        $ventas = Venta::all();
        $clientes = Cliente::all();
        

        foreach($ventas as $venta){
            $venta->productos()->attach($productos->random(rand(2,4)));
        }
        foreach ($clientes as $cliente) {
            $cliente->ventas()->saveMany(Venta::factory()->count(rand(2, 5))->make());
        }





    }
}
