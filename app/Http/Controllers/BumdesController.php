<?php

namespace App\Http\Controllers;

use App\Models\Bumdes;
use Illuminate\Http\Request;

class BumdesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bumdes = Bumdes::all();

        return view('admin.bumdes.index',compact('bumdes'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bumdes  $bumdes
     * @return \Illuminate\Http\Response
     */
    public function show(Bumdes $bumdes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bumdes  $bumdes
     * @return \Illuminate\Http\Response
     */
    public function edit(Bumdes $bumdes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bumdes  $bumdes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bumdes $bumdes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bumdes  $bumdes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bumdes $bumdes)
    {
        //
    }
}
