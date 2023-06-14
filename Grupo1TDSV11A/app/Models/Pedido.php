<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
        //Nombre de la tabla
        protected $table = 'pedidos';

        //Llave primaria de mi tabla
        protected $primaryKey = 'Id_Pedido';
    
        //Campos de la tabla 
        protected $fillable = ['FechaPedido', 'FechaEntrega', 'Observaciones', 'Id_Cliente'];
}
