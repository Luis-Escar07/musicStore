<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['user_id', 'nombre', 'apellidos', 'correo', 'calle_ext', 'interior', 'cod_postal', 'ciudad', 'estado', 'telefono'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
