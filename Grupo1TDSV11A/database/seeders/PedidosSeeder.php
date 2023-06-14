<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'FechaPedido' => '2023-06-01',
                'FechaEntrega' => '2023-06-05',
                'Observaciones' => 'Pedido urgente',
                'Id_Cliente' => 1,
            ],
            [
                'FechaPedido' => '2023-06-02',
                'FechaEntrega' => '2023-06-07',
                'Observaciones' => 'Pedido regular',
                'Id_Cliente' => 2,
            ],
            [
                'FechaPedido' => '2023-06-03',
                'FechaEntrega' => '2023-06-08',
                'Observaciones' => 'Pedido con descuento',
                'Id_Cliente' => 3,
            ],
            [
                'FechaPedido' => '2023-06-04',
                'FechaEntrega' => '2023-06-09',
                'Observaciones' => 'Pedido para eventos',
                'Id_Cliente' => 4,
            ],
            [
                'FechaPedido' => '2023-06-05',
                'FechaEntrega' => '2023-06-10',
                'Observaciones' => 'Pedido personalizado',
                'Id_Cliente' => 5,
            ],
            [
                'FechaPedido' => '2023-06-06',
                'FechaEntrega' => '2023-06-11',
                'Observaciones' => 'Pedido especial',
                'Id_Cliente' => 6,
            ],
            [
                'FechaPedido' => '2023-06-07',
                'FechaEntrega' => '2023-06-12',
                'Observaciones' => 'Pedido de gran volumen',
                'Id_Cliente' => 7,
            ],
            [
                'FechaPedido' => '2023-06-08',
                'FechaEntrega' => '2023-06-13',
                'Observaciones' => 'Pedido internacional',
                'Id_Cliente' => 8,
            ],
            [
                'FechaPedido' => '2023-06-09',
                'FechaEntrega' => '2023-06-14',
                'Observaciones' => 'Pedido estándar',
                'Id_Cliente' => 9,
            ],
            [
                'FechaPedido' => '2023-06-10',
                'FechaEntrega' => '2023-06-15',
                'Observaciones' => 'Pedido urgente',
                'Id_Cliente' => 10,
            ],
            [
                'FechaPedido' => '2023-06-11',
                'FechaEntrega' => '2023-06-16',
                'Observaciones' => 'Pedido promocional',
                'Id_Cliente' => 11,
            ],
            [
                'FechaPedido' => '2023-06-12',
                'FechaEntrega' => '2023-06-17',
                'Observaciones' => 'Pedido personalizado',
                'Id_Cliente' => 12,
            ],
        ];

        DB::table('pedidos')->insert($data);
    }
}
