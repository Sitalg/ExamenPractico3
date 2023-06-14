<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

            //Nombre de la tabla
            protected $table = 'pedidos';

            //Llave primaria de mi tabla
            protected $primaryKey = 'Id_Cliente';
        
            //Campos de la tabla 
            protected $fillable = ['Nombre', 'Apellido', 'Fecha_Nac'];
}
