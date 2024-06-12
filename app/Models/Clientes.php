<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Clientes extends Model
{
    use HasFactory;

    protected $table = "clientes";
    protected $primaryKey = "codigo";
    public $timestamps = false;

    protected $fillable = [
         'nombre', 
         'edad', 
         'categoria'
    ];

    public function obtenerTodos()
    {
        //return Clientes::all();
        $query = "SELECT c.codigo AS codigo, c.nombre AS nombre_cliente , c.edad AS edad, cat.nombre AS categoria FROM clientes c INNER JOIN categorias cat ON c.categoria = cat.codigo;";
        return DB::select($query);
    }

    public function crear(Clientes $obj)
    {
       return $obj->save();
    }
}
