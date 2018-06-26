<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lineas extends Model
{
  protected $table='catalogo_lineas';
  protected $fillable = ['linea'];
  public $timestamps =false;
}
