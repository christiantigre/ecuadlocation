<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincias extends Model
{
	protected $table = 'provincias';

    protected $fillable = [
        'provincia', 'cod_postal', 'latitud','longitud'
    ];

    public function pais(){
    	return $this->belongsTo(Pais::class);
    }

    public function cantones(){
    	return $this->hasMany(Canton::class);
    }

}
