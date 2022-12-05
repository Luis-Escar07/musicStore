<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Compra;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Compra::create(['noProductos' => '3', 'totalPrecio' => '123', 'fecha' => '2022-10-20']);
        Compra::create(['noProductos' => '5', 'totalPrecio' => '542', 'fecha' => '2021-11-30']);
        Compra::create(['noProductos' => '1', 'totalPrecio' => '70', 'fecha' => '2020-05-14']);

        Compra::factory(30)->create();
    }
}
