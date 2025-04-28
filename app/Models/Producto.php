<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos'; // Ojo que tu tabla debe llamarse "productos"

    protected $primaryKey = 'id_producto';

    protected $fillable = [
        'nombre_producto',
        'stok',
        'precio',
        'img',
        'descripcion',
    ];

    public $timestamps = false; // Tu tabla no tiene created_at ni updated_at
}
