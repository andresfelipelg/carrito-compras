<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

       
    protected $table = "ventas";
    
    protected $fillable = [
        'id',
        'user_id',
        'producto_id',
        'precio',
    ] ;
}
