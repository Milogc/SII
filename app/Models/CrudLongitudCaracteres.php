<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CrudLongitudCaracteres extends Model
{
    protected $table='catalogo_restricciones_longitud';
      protected $fillable = ['valor'];
        public $timestamps =false;
}
