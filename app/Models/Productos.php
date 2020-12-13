<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model {
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'marca', 'descripcion', 'precio'];
}