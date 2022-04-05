<?php

namespace App\Http\Controllers;

use App\Models\Idopont;
use App\Http\Requests\StoreIdopontRequest;
use App\Http\Requests\UpdateIdopontRequest;

class IdopontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idoponts = Idopont::all();
        return response()->json($idoponts);
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
     * @param  \App\Http\Requests\StoreIdopontRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIdopontRequest $request)
    {
        $idopont = new Idopont();
        $idopont->fill($request->all());
        $idopont->save();
        return response()->json($idopont, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Idopont  $idopont
     * @return \Illuminate\Http\Response
     */
    public function show(Idopont $idopont)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Idopont  $idopont
     * @return \Illuminate\Http\Response
     */
    public function edit(Idopont $idopont)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIdopontRequest  $request
     * @param  \App\Models\Idopont  $idopont
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIdopontRequest $request, Idopont $idopont)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Idopont  $idopont
     * @return \Illuminate\Http\Response
     */
    public function destroy(Idopont $idopont)
    {
        //
    }
}
