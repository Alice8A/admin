<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Inventario;


class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Metodo ORM
        $pr = new Inventario;
    $pr->id              = 1;
    $pr->codigo          = '1'; 
    $pr->categoria       = 'Seguridad';
    $pr->producto        = 'guantes nitrilo';
    $pr->costoUnitario      = '25000';
    $pr->cantidadDisponible = '20';
    $pr->descripcion        = 'guantes nuevos';
    $pr->ubicacion          = 'bodega';
    $pr->fechaEntrada        = '2024-06-16';
    $pr->fechaSalida        = '2024-09-16';
    $pr->salidaDestino      = 'Andres Ochoa';           
    $pr->estado         = 'Activo';
    $pr->entrega        = 'Karen Caceres';
    $pr->recibe         = 'Siso';
    $pr->save();

    }
}
