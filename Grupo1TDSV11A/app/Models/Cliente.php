<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public $timestamps = false;

            //Nombre de la tabla
            protected $table = 'clientes';

            //Llave primaria de mi tabla
            protected $primaryKey = 'Id_Cliente';
        
            //Campos de la tabla 
            protected $fillable = ['Nombre', 'Apellido', 'Fecha_Nac'];
}
