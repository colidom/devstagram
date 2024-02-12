<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /* Info que se llena en DB para que laravel sepa que
    procesar antes de enviar a DB, siempre será la misma que
    en el controller al llamar el método Post::create().
    */
    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'user_id'
    ];
}
