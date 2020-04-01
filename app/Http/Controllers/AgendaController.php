<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;

class AgendaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $buscar = $request->get('buscarpor');
        
        $tipo = $request->get('tipo');

        /************************************************************ */
        //diferentes formas de hacer que al cambiar el paginador no se reinicie la busqueda del buscador

        $variablesurl = $request->all();

        /*$variablesurl = [
            'tipo' => $tipo,
            'buscarpor' => $buscar
        ];*/

        //$variablesurl = $request->input();
        //$variablesurl = $request->query();
        //$variablesurl = $request->only(['tipo','buscarpor']);
        //$variablesurl = $request->except(['page']);
        //$variablesurl = $_GET;

        //dd($variablesurl);
        /********************************************************** */

        $Agenda = Agenda::buscarpor($tipo,$buscar)->paginate(5)->appends($variablesurl);
        //$Agenda = Agenda::buscarpor($tipo,$buscar)->paginate(5);
        
        return view('agenda.index', compact('Agenda')); //carpeta.archivo
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Agenda = new Agenda;
        $Agenda->nombres = $request->nombres;
        $Agenda->apellidos = $request->apellidos;
        $Agenda->telefono = $request->telefono;
        $Agenda->celular = $request->celular;
        $Agenda->sexo = $request->sexo;
        $Agenda->email = $request->email;
        $Agenda->posicion = $request->posicion;
        $Agenda->departamento = $request->departamento;
        $Agenda->salario = $request->salario;
        $Agenda->fechadenacimiento = $request->fechadenacimiento;
        $Agenda->save();
        return redirect()->route('agenda.index')->with('datos','Registro guardado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Agenda = Agenda::findOrFail($id);
        return view('agenda.show',compact('Agenda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Agenda = Agenda::findOrFail($id);
        return view('agenda.edit',compact('Agenda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Agenda = Agenda::findOrFail($id);
        $Agenda->nombres = $request->nombres;
        $Agenda->apellidos = $request->apellidos;
        $Agenda->telefono = $request->telefono;
        $Agenda->celular = $request->celular;
        $Agenda->sexo = $request->sexo;
        $Agenda->email = $request->email;
        $Agenda->posicion = $request->posicion;
        $Agenda->departamento = $request->departamento;
        $Agenda->salario = $request->salario;
        $Agenda->fechadenacimiento = $request->fechadenacimiento;
        $Agenda->save();
        return redirect()->route('agenda.index')->with('datos','Registro actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Agenda = Agenda::findOrFail($id);
        $Agenda->delete();
        return redirect()->route('agenda.index')->with('datos','Registro eliminado correctamente!');
    }

    public function confirm($id)
    {
        $Agenda = Agenda::findOrFail($id);
        return view('agenda.confirm',compact('Agenda'));
    }
}
