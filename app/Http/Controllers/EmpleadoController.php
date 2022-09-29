<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpleadoStoreRequest;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{

    public function __invoke(){
        //
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  

    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $empleados = Empleado::where('nombres','Like','%'.$buscarpor.'%')
            ->orWhere('apellidos','Like','%'.$buscarpor.'%')
            ->orWhere('Dni','Like','%'.$buscarpor.'%')
            ->orWhere('email','Like','%'.$buscarpor.'%')
            ->orWhere('area','Like','%'.$buscarpor.'%')
            ->orWhere('cargo','Like','%'.$buscarpor.'%')
            ->orWhere('local','Like','%'.$buscarpor.'%')
            ->orWhere('nacimiento','Like','%'.$buscarpor.'%')
            ->orWhere('inicio','Like','%'.$buscarpor.'%')
            ->orWhere('fin','Like','%'.$buscarpor.'%')
            ->orWhere('type','Like','%'.$buscarpor.'%')
            ->paginate(10);
        return view('empleados.index',compact('empleados','buscarpor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpleadoStoreRequest $request)
    {
        Empleado::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'Dni' => $request->Dni,
            'email' => $request->email,
            'area' => $request->area,
            'cargo' => $request->cargo,
            'local' => $request->local,
            'nacimiento' => $request->nacimiento,
            'inicio' => $request->inicio,
            'fin' => $request->fin,
            'type' => $request->type,
        ]);
        return to_route('empleados.index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmpleadoStoreRequest $request, Empleado $empleado)
    {
        $request->validate([
            'nombres' => 'required',
          
        ]);
        $empleado->update([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'Dni' => $request->Dni,
            'email' => $request->email,
            'area' => $request->area,
            'cargo' => $request->cargo,
            'local' => $request->local,
            'nacimiento' => $request->nacimiento,
            'inicio' => $request->inicio,
            'fin' => $request->fin,
            'type' => $request->type,
        ]);
        return to_route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return to_route('empleados.index');
    }


   
}
