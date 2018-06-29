<?php

namespace App\Http\Controllers\Coordinador;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\CrudLongitudCaracteres;


class CrudLongitudCaracteresControllers extends Controller
{
  public function index(){
    $longitud = DB::table('catalogo_restricciones_longitud')->get();
   return view('crudlongitudecaracteres/index', compact('longitud'));
  }

    public function edit($idproy)
    {
      $longitud = CrudLongitudCaracteres::find($idproy);
      return view('crudlongitudecaracteres/edit',compact('longitud','idproy'));

    }
    public function update(Request $request, $idproy)
    {

    $longitud = CrudLongitudCaracteres::find($id);
    $longitud->valor = $request->get('valor');
    $longitud->save();
    return redirect('crudlongitudecaracteres');
    }
}
