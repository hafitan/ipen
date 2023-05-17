<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penduduk = Penduduk::all();

        return view('admin.penduduk.index', compact('penduduk'));
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
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'dusun' => 'required',
        ]);

        //kalau mau pakai yang multiple  yang  bawah sama yang atas di kasih tag komentar
        Penduduk::create($request->all());
        User::create([
            'name' => $request->nama,
            'nik' => $request->nik,
            'email' => $request->nik.'@gmail.com',
            'password' => Hash::make($request->nik),
            'role' => 'user'
        ]);

        // val ini untuk multiple store

        // Penduduk::create([
        //     'nik' => $request->nik,
        //     'nama' => $request->nama,
        //     'rt' => $request->rt,
        //     'rw' => $request->rw,
        //     'alamat' => $request->alamat,
        //     'no_tlp' => $request->no_tlp,
        // ]);


        // User::create([
        //     'username' =>$request->nik,
        //     'password' => Hash::make($request->nik),
        //     'name' => $request->nama,
        //     'level' => 'Penduduk',
        // ]);


        return redirect()->route('penduduk.index')
                        ->with('success','penduduk created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show(Penduduk $penduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(Penduduk $penduduk)
    {
        return view('admin.penduduk.edit',compact('penduduk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penduduk $penduduk)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'dusun' => 'required',
        ]);

        $penduduk->update($request->all());

        return redirect()->route('penduduk.index')
                        ->with('success','penduduk updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();

        return redirect()->route('penduduk.index')
                        ->with('success','penduduk deleted successfully');
    }
}
