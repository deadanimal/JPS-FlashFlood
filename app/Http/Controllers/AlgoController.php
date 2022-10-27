<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlgoRequest;
use App\Http\Requests\UpdateAlgoRequest;
use App\Models\Algo;

class AlgoController extends Controller
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
     * @param  \App\Http\Requests\StoreAlgoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlgoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Algo  $algo
     * @return \Illuminate\Http\Response
     */
    public function show(Algo $algo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Algo  $algo
     * @return \Illuminate\Http\Response
     */
    public function edit(Algo $algo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlgoRequest  $request
     * @param  \App\Models\Algo  $algo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlgoRequest $request, Algo $algo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Algo  $algo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Algo $algo)
    {
        //
    }
}
