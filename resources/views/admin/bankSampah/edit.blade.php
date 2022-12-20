@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit bank sampah</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bank-sampah.index') }}"> Back</a>
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

    <form action="{{ route('bank-sampah.update',$bankSampah->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIK:</strong>
                    {{-- <input type="number" name="nik" value="{{ $penduduk->nik }}" class="form-control" placeholder="NIK" min="0"> --}}
                    <select name="nik" class="form-control" id="">
                        <option value="">--pilih</option>
                        @foreach ($penduduk as $penduduk)
                            <option value="{{ $penduduk->nik }}" @if($bankSampah->nik == $penduduk->nik)selected @endif>{{ $penduduk->nik }}</option>
                        @endforeach
                    </select>
                </div>
              </div>

              {{-- @dd($penduduk) --}}
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="nama" value="{{ $bankSampah->nama }}" class="form-control" placeholder="Name">
                    {{-- <select name="nama" class="form-control" id="">
                        <option value="">--pilih--</option>
                        @foreach ($penduduk as $pen)
                            <option value="{{ $pen->nama }}" @if($bankSampah->nama == $pen->nama)selected @endif>{{ $pen->nama }}</option>
                        @endforeach
                    </select> --}}
                </div>
            </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rt:</strong>
                    <input type="number" name="rt" value="{{ $bankSampah->rt }}" class="form-control" placeholder="rt" min="0">
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rw:</strong>
                    <input type="number" name="rw" value="{{ $bankSampah->rw }}" class="form-control" placeholder="rw" min="0">
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <input type="text" name="alamat" value="{{$bankSampah->alamat}}" class="form-control">
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Berat sampah:</strong>
                    <input type="number" value="{{ $bankSampah->berat_sampah }}" name="berat_sampah" class="form-control" placeholder="harga" min="0">
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga per kg:</strong>
                    <input type="number" value="{{ $bankSampah->harga_per_kg }}" name="harga_per_kg" class="form-control" placeholder="harga" min="0">
                </div>
              </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

@endsection
