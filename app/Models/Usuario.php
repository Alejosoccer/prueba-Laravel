<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    public function usuario(){
     return $this->hasMany(Rol::class);
 }
 public function configuracion()
 {
     return $this->belongsTo(Configuracion::class);
 }
}
