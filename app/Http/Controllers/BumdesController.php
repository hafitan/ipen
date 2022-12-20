<?php

namespace App\Http\Controllers;

use App\Models\Bumdes;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
        $penduduk = Penduduk::all();

        return view('admin.bumdes.index',compact('bumdes', 'penduduk'));
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
        Bumdes::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'alamat' => $request->alamat,
            'produk' => $request->produk,
            'penghasilan' => $request->penghasilan,
            'tanggal_input' => Carbon::now(),
        ]);

        return redirect()->route('bumdes.index')->with('success','bumdes created successfully.');
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
    public function edit($id)
    {
        $bumdes = Bumdes::find($id);
        $penduduk = Penduduk::all();
        return view('admin.bumdes.edit', compact('bumdes', 'penduduk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bumdes  $bumdes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($bumdes);
        // $bumdes->update([
        //     'nik' => $request->nik,
        //     'nama' => $request->nama,
        //     'rt' => $request->rt,
        //     'rw' => $request->rw,
        //     'alamat' => $request->alamat,
        //     'produk' => $request->produk,
        //     'penghasilan' => $request->penghasilan,
        //     'tanggal_input' => Carbon::now(),
        // ]);

        // return redirect()->route('bumdes.index')->with('success','bumdes updated successfully.');
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'alamat' => 'required',
            'produk' => 'required',
            'penghasilan' => 'required',
        ]);

        $bumdes = Bumdes::find($id);
        $bumdes->update($request->all());

        return redirect()->route('bumdes.index')->with('success','Bumdes Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bumdes  $bumdes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bumdes = Bumdes::find($id);
        $bumdes->delete();

        return redirect()->route('bumdes.index');
    }
}
