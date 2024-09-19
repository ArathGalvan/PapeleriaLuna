<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    public function ventas(){
        return $this->belongsToMany(Venta::class);
        
    }
    public function clientes()
{
    return $this->belongsTo(Cliente::class);
}
public function productos(){
    return $this->belongsToMany(Producto::class);
    
}

}
