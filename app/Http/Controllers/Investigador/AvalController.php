<?php

namespace App\Http\Controllers\Investigador;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use Illuminate\Http\UploadedFile;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Auth;


use App\Models\Proyecto;
use App\Models\Aval;
//use App\Models\User;

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
//        $path = $request->evidencia->storeAs('', $fileName);
        $path = Storage::putFileAs(
            '', $request->file('evidencia'), $fileName
        );


        $Aval= Aval::find($idproy);
        $Aval->aval = $path;
        $Aval->save();


        $path = public_path() . '/evidencias' . $path;
      //  var_dump($path);

//        Storage::disk('public')->put($fileName,  File::get('evidencia'));

//        Storage::disk('local')->put($fileName,  $file);
//        Storage::disk('local')->put('file.txt', 'Contents');




//        Storage::putFileAs('public', $file, $fileName);

        $Retornar = array(
            'fileName' => $fileName,
            'proyecto_id' => $idproy,

        );
       // $path = public_path('images/users/'.$fileName);
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
