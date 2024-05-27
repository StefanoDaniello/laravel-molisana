<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // Campi che devono essere riempiti dall'utente e che devono essere passati
    protected $fillable = [
        'title',
        'description',
        'weight',
        'image',
        'type',
        'cooking_time',
    ];
    // Campi che non sono riempiti dall'utente se non inseriamo 
    //niente comunque saranno intesi  'id', 'created_at' o 'updated_at'
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
}
