<?php

namespace MyApLaravel;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'url_image',
    ];
}
