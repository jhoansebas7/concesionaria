<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automovil extends Model
{
    use HasFactory;
    protected $table = "automoviles";
    protected $fillable = ['nombre', 'potencia', 'motor'];
    
protected $guarded = ['id'];
protected $primaryKey = 'id';
}
