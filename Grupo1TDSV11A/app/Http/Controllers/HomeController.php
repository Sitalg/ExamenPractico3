<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data =[
            [
                'Nombre'=>'Sital Andrea Galdamez Silva',
                'Carnet'=> '038922'
            ],
            [
                'Nombre' => 'Omar Farid Parada Paredes',
                'Carnet' => '038822'
            ]
        ];
        $grupo = [
            'Grupo'=>'TDSV11A',
            'Materia' => 'Desarrollo de Aplicaciones Web',
            'GrupoProyecto' => 1
        ];

        return view('home')->with(['alumnos'=>$data, 'grupo'=>$grupo]);
    }
}
