<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;


class Equipo extends Model
{
    use HasFactory;
    use FilterQueryString;

    protected $filters = ['like'];
    protected $fillable = ['nombre','descripcion','imagen'];
    protected $table = "equipos";

    // public function scopeName($query, $nombre)
    // {
    //     if($nombre)
    //         return $query->where('name', 'LIKE', "%$nombre%");
    // }

    // public function scopeMarca($query, $marca)
    // {
    //     if($marca)
    //         return $query->where('email', 'LIKE', "%$marca%");
    // }

    // public function scopeModelo($query, $modelo)
    // {
    //     if($modelo)
    //         return $query->where('modelo', 'LIKE', "%$modelo%");
    // }
}
