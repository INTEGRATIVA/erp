<?php

namespace App\Http\Controllers;

use App\Models\Exame;
use Illuminate\Http\Request;

class ExameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('saude/exame/index');
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Exame $exame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exame $exame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exame $exame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exame $exame)
    {
        //
    }
}
