<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $primaryKey = 'id_factura';
    use HasFactory;
    protected $fillable = ['id','total'];
}
