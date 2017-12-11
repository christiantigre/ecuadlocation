<?php

namespace Ecuadlocation;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $fillable = [
        'pais', 'cod_postal', 'latitud','longitud'
    ];

    public function provincias(){
    	return $this->hasMany(Provincia::class);
    }
    
}
