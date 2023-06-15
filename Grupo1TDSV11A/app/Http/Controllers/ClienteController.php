<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        return view('clientes/show')->with(['clientes' => $clientes]);
    }
    public function create(){
        return view('/clientes/create');
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            'Nombre' => 'required',
            'Apellido' => 'required',
            'Fecha_Nac' => 'required'
        ]);

        Cliente::create($data);

        return redirect('/clientes');
    }
    public function edit(Cliente $cliente)
    {
        return view('/clientes/update')->with(['cliente' => $cliente]);

    }


    public function update(Request $request, Cliente $cliente)
    {
        $data = request()->validate([
            'Nombre' => 'required',
            'Apellido' => 'required',
            'Fecha_Nac' => 'required'
        ]);

        $cliente->Nombre = $data['Nombre'];
        $cliente->Apellido = $data['Apellido'];
        $cliente->Fecha_Nac = $data['Fecha_Nac'];

        $cliente->save();

        return redirect('/clientes');
        
    }

 
    public function destroy($id)
    {

        Cliente::destroy($id);

        return response()->json(array('res' => true));
    }

}
