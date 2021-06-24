<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\App;

class Artista extends Model
{
    //vincular modelo a tabla
    protected $table="Artist";

    protected $primaryKey ="ArtistId";
    public $timestamps = false;

    //Definir relacion entre artista 1- M albums
    public function discos(){
        //HasMany: parametros
        //1. Modelo a relacinal
        //2. Definir FK
        //3. Llave primaria
        return $this->hasMany('App\Disco', 'ArtistId');
    }
    public function canciones(){
        //hasManyThrough: Parametros:
        //1. Modelo Nieto
        //2. Modelo Papa
        //3. FK del Abuelo en el Papa
        //4. FK del Papa en el nieto
        //5. PK del obuelo
        //6. PK del papa
        return $this->hasManyThrough('App\Cancion',
                                     'App\Disco',
                                     'ArtistId',
                                     'AlbumId',
                                     'ArtistId',);
    }
}
