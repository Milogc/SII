<?php

namespace App\Http\Controllers\Investigador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Proyecto;
use App\Models\Aval;

class AvalController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:Investigador');
    }

    public function mostrar($idproy)
    {
        $aval= Aval::find($idproy);
        $proyecto= Proyecto::find($idproy);
        return view('aval/show',compact('proyecto','aval'));
    }
    public function agregar(Request $request)
    {
        $idproy = $request->input('proyecto_id');
        $file = $request->file('evidencia');
        $extension = "";
        $extension = $file->getClientOriginalExtension();
        $fileName = $idproy . '_aval' . '.' . $extension;
        $path = Storage::putFileAs(
            '', $request->file('evidencia'), $fileName
        );
        $Aval= Aval::find($idproy);
        $Aval->aval = $path;
        $Aval->save();
        $path = public_path() . '/evidencias' . $path;
        $Retornar = array(
            'fileName' => $fileName,
            'proyecto_id' => $idproy,

        );
        return response()->json($Retornar);
    }


    public function eliminar(Request $request)
    {
        $Aval = Aval::find( $request->input('proyecto_id') );
        $fileName = $Aval->aval;
        $archivo = public_path() .'/evidencias/'.$fileName;
        $ret = "--";

        if (Storage::disk('local')->exists($fileName) ) {
            //return response()->download($url);
            $ret = Storage::disk('local')->delete($fileName) ;
            if($ret) $Aval->aval = null;
            $Aval->save();
            $realizado = "si";

        }else $realizado = "no";

        $arrayName = array('id' =>  $request->input('proyecto_id'),'realizado' => $ret , 'archivo'=> $archivo);
        return response()->json( $arrayName );
    }




    public function update(Request $request, $idproy)
    {
//        return redirect('home')->with('success', 'Information del protocolo ha sido actualizada');
        //return redirect()->back()->with('success', 'Information del protocolo ha sido actualizada');
    }

}
