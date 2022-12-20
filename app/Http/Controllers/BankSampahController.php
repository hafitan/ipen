<?php

namespace App\Http\Controllers;

use App\Models\BankSampah;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BankSampahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bankSampah = BankSampah::all();
        $penduduk = Penduduk::all();

        return view('admin.bankSampah.index', compact('bankSampah', 'penduduk'));
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
        // $request->validate([
        //     'nik' => 'required',
        //     'nama' => 'required',
        //     'rt' => 'required',
        //     'rw' => 'required',
        //     'alamat' => 'required',
        //     'berat_sampah' => 'required',
        //     'harga_per_kg' => 'required',
        //     'total_harga' => 'required',
        // ]);

        $r = BankSampah::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'alamat' => $request->alamat,
            'berat_sampah' => $request->berat_sampah,
            'harga_per_kg' => $request->harga_per_kg,
            'total_harga' => $request->berat_sampah * $request->harga_per_kg,
            'tanggal_setor' => Carbon::now()
        ]);

        // dd($r);

        return redirect()->route('bank-sampah.index')
                        ->with('success','bank sampah created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BankSampah  $bankSampah
     * @return \Illuminate\Http\Response
     */
    public function show(BankSampah $bankSampah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BankSampah  $bankSampah
     * @return \Illuminate\Http\Response
     */
    public function edit(BankSampah $bankSampah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BankSampah  $bankSampah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BankSampah $bankSampah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankSampah  $bankSampah
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankSampah $bankSampah)
    {
        //
    }
}
