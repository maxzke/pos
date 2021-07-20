<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
    public function apartados(){
        return $this->hasMany(Apartado::class);
    }
    public function abonos(){
        return $this->hasMany(Abono::class);
    }
    public function detalles(){
        return $this->hasMany(Detalle::class);
    }
}
