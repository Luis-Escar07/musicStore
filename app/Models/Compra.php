<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['noProductos', 'totalPrecio', 'fecha'];

    public function clientes()
    {
        return $this->belongsToMany(Cliente::class);
    }
}
