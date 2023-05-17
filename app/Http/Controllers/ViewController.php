<?php

namespace App\Http\Controllers;

use App\Models\BankSampah;
use App\Models\Bumdes;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function penduduk()
    {
        $id = Auth::user()->nik;
        $penduduk = Penduduk::where('nik', $id)->get();

        return view('mainViews.penduduk', compact('penduduk'));
    }

    public function bumdes()
    {
        $id = Auth::user()->nik;
        $bumdes = Bumdes::where('nik', $id)->get();

        return view('mainViews.bumdes',compact('bumdes'));
    }

    public function bankSampah()
    {
        $id = Auth::user()->nik;
        $bankSampah = BankSampah::where('nik', $id)->get();

        return view('mainViews.bankSampah', compact('bankSampah'));
    }

}
