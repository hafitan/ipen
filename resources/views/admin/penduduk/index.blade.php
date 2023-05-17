@extends('layouts.layout')
@section('content')
    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> --}}
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
    Create
</button>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Penduduk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Rt</th>
                            <th>Rw</th>
                            <th>Dusun</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th width="200px">Action</th>
                        </tr>
                    </thead>
                    @php $no = 1; @endphp
                    @foreach ($penduduk as $penduduk)
                        <tbody>
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $penduduk->nik }}</td>
                                <td>{{ $penduduk->nama }}</td>
                                <td>{{ $penduduk->rt }}</td>
                                <td>{{ $penduduk->rw }}</td>
                                <td>{{ $penduduk->dusun }}</td>
                                <td>{{ $penduduk->alamat }}</td>
                                <td>{{ $penduduk->no_tlp }}</td>
                            <td>
                                <form action="{{ route('penduduk.destroy',$penduduk->id) }}" method="POST">

                                    <a class="btn btn-primary" href="{{ route('penduduk.edit',$penduduk->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" onclick="return confirm('Are you sure you want to delete {{ $penduduk->nama }}?');" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>

                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('penduduk.store') }}" method="post">
          @csrf
          <div class="modal-body">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>NIK:</strong>
                  <input type="number" name="nik" class="form-control" placeholder="NIK" min="0">
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Nama:</strong>
                  <input type="text" name="nama" class="form-control" placeholder="Nama">
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Rt:</strong>
                  <input type="number" name="rt" class="form-control" placeholder="rt" min="0">
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Rw:</strong>
                  <input type="number" name="rw" class="form-control" placeholder="rw" min="0">
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Dusun:</strong>
                    <input type="text" name="dusun" class="form-control" placeholder="dusun">
                </div>
              </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Alamat:</strong>
                  {{-- <input type="number" name="rt" class="form-control" placeholder="rt" min="0"> --}}
                  <textarea name="alamat" class="form-control"></textarea>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>No HP:</strong>
                  <input type="number" name="no_tlp" class="form-control" placeholder="+62" min="0">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
</div>
