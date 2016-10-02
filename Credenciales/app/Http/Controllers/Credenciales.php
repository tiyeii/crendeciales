<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\credencial;

use Storage;

class Credenciales extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request->puesto);
        $this->validate($request, [
            'nombre' => 'required',
            'puesto' => 'required',

            ]);

        $credencial = new credencial();
        $credencial ->nombre = $request->nombre;
        $credencial ->puesto = $request->puesto;

        $img = $request->file('foto');

        $file_route = time().'_'.$img->getClientOriginalName();

        Storage::disk('imgCredenciales')->put($file_route, file_get_contents( $img->getRealPath() ));

        $credencial->foto = $file_route;

        if($credencial->save()){
            return back()->with('msg', 'Credencial Creada');

        }else{
             return back()->with('msgs', 'Error al Crear');   
        }
        


        //dd('Datos Almacenados');

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
    public function edit($id)
    {
        //
        $credencial = credencial::find($id);
        return view('home')->with(['edit'=> true, 'credencial = > credencial']);
        dd($credencial);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
