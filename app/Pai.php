<?php

namespace App;

use App\Filho;

use Illuminate\Database\Eloquent\Model;

class Pai extends Model
{
    protected $table = 'pais';

    protected $fillable = [
        'id',
        'id_pai',
        'nome'
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];

    function filhos()
    {
       return $this->hasMany(Filho::class, 'id_pai');
    }
}
