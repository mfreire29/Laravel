<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultas extends Model {
    protected $table = 'consultas';
    protected $primaryKey = 'id';
    protected $fillable = ['razon', 'telefono', 'email', 'consulta', 'fecha', 'hora'];
}