<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

class Inventario extends Model
{
    use HasFactory;
    use FilterQueryString;

    protected $filters = ['like'];
    protected $table = "inventarios";
}
