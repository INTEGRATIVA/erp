<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/pessoa/index');
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
        //
        try {
            $tipo_pessoa = $request->get('tipo_pessoa');

            $pessoa = new Pessoa();

            if($tipo_pessoa == 'pf'){
                $pessoa = $pessoa->create($request->all())->pessoaFisica()->create($request->all());
            }else{
                $pessoa = $pessoa->create($request->all())->pessoaJuridica()->create($request->all());
            }
            return response()->json($pessoa, 201);
        } catch (\Throwable $th) {
            return response()->json($th, 501);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pessoa $pessoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pessoa $pessoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pessoa $pessoa,$id)
    {
        try {
            $pessoa->destroy($id);
            return response()->json($id,201);

        } catch (\Throwable $th) {
            return response()->json($th,501);
        }
    }

    public function getAll(){
        try {
            return response()->json(Pessoa::all(), 201);
        } catch (\Throwable $th) {
            return response()->json($th, 201);
        }
    }
}
