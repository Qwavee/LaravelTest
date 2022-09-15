<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidades extends Model
{
    protected $table = "unidades";
    protected $fillable = [
        'codigo',
        'tipo_ua',
        'marca',
        'procesador',
        'generacion',
     ];

     public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }  
}
