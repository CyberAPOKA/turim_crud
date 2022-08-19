<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filho extends Model
{
    protected $table = 'filhos';

    protected $fillable = [
        'id',
        'nome',
        'id_pai'
    ];

    protected $hidden = [
        'id',
        'id_pai',
        'created_at',
        'updated_at'
    ];
}
