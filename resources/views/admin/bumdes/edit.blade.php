@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit penduduk</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('penduduk.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bumdes.update', $bumdes->id) }}" method="post">
        @csrf
        @method('PUT')
{{-- @dd($penduduk) --}}
{{-- <input type="date" name="tanggal_input" value="{{ $bumdes->tanggal_input }}" hidden> --}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIK:</strong>
                    {{-- <input type="number" name="nik" value="{{ $penduduk->nik }}" class="form-control" placeholder="NIK" min="0"> --}}
                    <select name="nik" class="form-control" id="">
                        <option value="">--pilih</option>
                        @foreach ($penduduk as $penduduk)
                            <option value="{{ $penduduk->nik }}" @if($bumdes->nik == $penduduk->nik)selected @endif>{{ $penduduk->nik }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" class="form-control" value="{{ $bumdes->nama }}">
                    {{-- <select name="nama" class="form-control" id="">
                        <option value="">--pilih--</option>
                        @foreach ($penduduk as $pen)
                            <option value="{{ $penduduk->nama }}" @if($bumdes->nama == $penduduk->nama)selected @endif>{{ $penduduk->nama }}</option>
                        @endforeach
                    </select> --}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rt:</strong>
                    <input type="number" name="rt" value="{{ $bumdes->rt }}" class="form-control" placeholder="rt" min="0">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rw:</strong>
                    <input type="number" name="rw" value="{{ $bumdes->rw }}" class="form-control" placeholder="rw" min="0">
                </div>
              </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <input type="text" name="alamat" value="{{$bumdes->alamat}}" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Produk:</strong>
                    <input type="text" name="produk" value="{{$bumdes->produk}}" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Penghasilan:</strong>
                    <input type="number" name="penghasilan" value="{{$bumdes->penghasilan}}" class="form-control" min="0">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

        </div>
    </form>

@endsection
