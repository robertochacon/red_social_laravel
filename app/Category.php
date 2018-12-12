<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //

    public function anuncio(){
        return $this->hasMany(Anuncio::class, 'llave-foranea');
    }
}
