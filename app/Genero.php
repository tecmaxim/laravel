<?php

namespace MyApLaravel;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = "generos";
    
    protected $fillable = ['genere'];
}
