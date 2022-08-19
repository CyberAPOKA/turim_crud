<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    protected $table = 'familias';

    protected $fillable = [
        'id',
        'id_pai',
        'nome'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
