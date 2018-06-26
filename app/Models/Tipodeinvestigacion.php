<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipodeinvestigacion extends Model
{
  protected $table='catalogo_tipo_investigacion';
  protected $fillable = ['linea'];
  public $timestamps =false;
}
