<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\usuario;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class Usuariocontrol
{
    public function _construct()
    {


    }
    public  function index()
    {
        try{
            $listado=usuario::all();
            return response()->json($listado,Response::HTTP_OK);
        }
        catch (Exception $ex){
            return response()->json(['error'=>'Hubo un error al listar todos los usuarios: '. $ex->getMessage()], 206);
        }
    }
    public function show(Request $request ,$id)
    {
        try{
            $ID=usuario::find($id);
            return response()->json($ID,Response::HTTP_OK);
        }
        catch (Exception $ex){
            return response()->json(['error'=>'Hubo un error al encontrar el id del usuario '. $ex->getMessage()], 404);
        }

    }
    public function store(Request $request )
    {
        try{
            $ID=usuario::create($request->all());
            return response()->json($ID,Response::HTTP_OK);
        }
        catch (Exception $ex){
            return response()->json(['error'=>'Hubo un error al registrar el usuario '. $ex->getMessage()], 400);
        }

    }
    public function update(Request $request ,$id)
    {
        try{
            $user=usuario::findOrFail($id);
            $user->update  ( $request->all());
            return response()->json($user,Response::HTTP_OK);
        }
        catch (Exception $ex){
            return response()->json(['error'=>'Hubo un error al actualizar al usuario '. $ex->getMessage()], 400);
        }

    }


    public function  destroy(Request $request ,$id)
    {
        try{
            $user=usuario::destroy($id);
            $user->update  ( $request->all());
            return response()->json($user,Response::HTTP_OK);
        }
        catch (Exception $ex){
            return response()->json(['error'=>'Hubo un error al eliminar '. $ex->getMessage()], 400);
        }

    }



}
