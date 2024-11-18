<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(){
        //$getCliente = Cliente::all();
        //dd($getCliente);
        return view('layouts.admin');//, compact('getCliente'));
        //return view('cliente');
    }

    public function guardar(Request $request){
        //$getCliente = Cliente::all();
        //dd($request);
        Cliente::create($request->all());
        //return view('cliente');
        //return view('cliente', compact('getCliente'));
        return redirect()->to('/informacion');
    }

    public function informacion(){
        $getCliente = Cliente::all();
        return view('informacion', compact('getCliente'));
    }

    public function editar($id){
        //dd($id);
        $editCliente = Cliente::where('id', $id)->firstOrfail();
        //dd($editCliente);
        return view('editarCliente', compact('editCliente'));
    }

    public function actualizar(Request $request, $id){
        //dd($id, $request->nombre, $request->apellido);
        $actualizarD = Cliente::findOrFail($id);
        $requestCliente = $request->all();
        $actualizarD->update($requestCliente);
        return redirect()->to('/informacion');
    }

    public function eliminar($id){
        //dd($id);
        $eliminarCliente = Cliente::findOrFail($id);
        $eliminarCliente->delete();
        return redirect()->to('/informacion');
    }

    public function adminCompu(){
        return view('admin.administracion');
    }
    
    public function adminInven(){
        return view('admin.adminInvetario');
    }
}