<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
	protected $table = 'cantons';
	
    protected $fillable = [
        'canton', 'cod_postal', 'latitud','longitud'
    ];

    public function parroquias(){
    	return $this->hasMany(Parroquias::class);
    }

    public function provincia(){
    	return $this->belongsTo(Provincias::class);
    }

}
