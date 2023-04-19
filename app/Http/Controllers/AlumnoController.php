<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Iluminate\Http\Response
     */
    public function index()
    {
        //
        $alumnos = Alumno::latest() ->paginate(5);
        
        return view('alumnos.index', compact('alumnos'))
            ->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required'
        ]);

        Alumno::create($request -> all());
        $alumnos = Alumno::latest()->paginate(5);

        return view('alumnos.index', compact('alumno'))
            ->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Display the specified resource.
     * 
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
        $alumno = Alumno::find($id);
        return view('alumnos.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $alumno = Alumno::find($id);
        return view('alumnos.edit', compact('alumno'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
