<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $primaryKey = 'id_producto';
    use HasFactory;
    protected $fillable = ['nombre','tipo','precio','user_id','created_at'];
}
