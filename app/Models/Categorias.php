<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;

    protected $table = "categorias";    
    protected $primaryKey = "codigo";
    public $timestamps = false;

    protected $fillable = [
         'nombre'
    ];

    public function obtenerTodos()
    {
        return Categorias::all();
    }

    public function crear(Categorias $obj)
    {
       return $obj->save();
    }
}
