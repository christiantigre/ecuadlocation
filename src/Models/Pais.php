<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
	protected $table = 'paises';

    protected $fillable = [
        'pais', 'cod_postal', 'latitud','longitud'
    ];

    public function provincias(){
    	return $this->hasMany(Provincia::class);
    }
    
}
