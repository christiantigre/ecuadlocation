<?php

namespace Ecuadlocation;

use Illuminate\Database\Eloquent\Model;

class Parroquias extends Model
{
    protected $fillable = [
        'parroquia', 'cod_postal', 'latitud','longitud'
    ];

    public function pais(){
    	return $this->belongsTo(Pais::class);
    }

    public function canton(){
    	return $this->belongsTo(Canton::class);
    }
}
