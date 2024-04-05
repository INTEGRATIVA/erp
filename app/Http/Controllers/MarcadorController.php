<?php

namespace App\Http\Controllers;

use App\Models\Marcador;
use Illuminate\Http\Request;

class MarcadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/cadastro/marcador/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $marcador = new Marcador();
            if($request->input('id') > 0){
                $marcador = $marcador->find($request->id);
                $marcador->nome = $request->input('nome');
                $marcador->minimo = $request->input('minimo');
                $marcador->maximo = $request->input('maximo');
                $marcador->maximo = $request->input('masculino');
                $marcador->maximo = $request->input('feminino');

                $marcador->save();
            }else{
                $marcador = $marcador->create($request->all());
            }
            return response()->json($marcador, 201);
        } catch (\Throwable $th) {
            return response()->json($th, 501);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Marcador $marcador,$id)
    {
        return($marcador->find($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(marcador $marcador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, marcador $marcador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marcador $marcador,$id)
    {
        try {
            $marcador->destroy($id);
            return response()->json($id,200);

        } catch (\Throwable $th) {
            return response()->json($th,501);
        }
    }

    public function getAll(){
        try {
            return response()->json(Marcador::all(), 201);
        } catch (\Throwable $th) {
            return response()->json($th, 201);
        }

    }
}
