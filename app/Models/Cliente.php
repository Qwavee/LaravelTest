<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "cliente";
    protected $fillable = [
        'nombre',
        'sector',
        'tamanio',
     ];

     public function unidades()
    {
        die('hola');
        return $this->hasMany(Unidades::class, 'cliente_id', 'id');
    }
}
