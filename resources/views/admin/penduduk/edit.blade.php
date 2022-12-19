@extends('layouts.layout')
@section('content')
    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> --}}
    <!-- Button trigger modal -->

    <!-- DataTales Example -->
    {{-- <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Penduduk</h6>
        </div>


    </div> --}}
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

    <form action="{{ route('penduduk.update',$penduduk->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIK:</strong>
                    <input type="number" name="nik" value="{{ $penduduk->nik }}" class="form-control" placeholder="NIK" min="0">
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="nama" value="{{ $penduduk->nama }}" class="form-control" placeholder="Name">
                </div>
            </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rt:</strong>
                    <input type="number" name="rt" value="{{ $penduduk->rt }}" class="form-control" placeholder="rt" min="0">
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rw:</strong>
                    <input type="number" name="rw" value="{{ $penduduk->rw }}" class="form-control" placeholder="rw" min="0">
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <input type="text" name="alamat" value="{{$penduduk->alamat}}" class="form-control">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No HP:</strong>
                    <input type="number" value="{{ $penduduk->no_tlp }}" name="no_tlp" class="form-control" placeholder="+62" min="0">
                </div>
              </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

@endsection
