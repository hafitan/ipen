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
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Rt</th>
                            <th>Rw</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                        </tr>
                    </thead>
                    @foreach ($penduduk as $penduduk)
                        <tbody>
                            <tr>
                                <td>{{ $penduduk->nik }}</td>
                                <td>{{ $penduduk->nama }}</td>
                                <td>{{ $penduduk->rt }}</td>
                                <td>{{ $penduduk->rw }}</td>
                                <td>{{ $penduduk->alamat }}</td>
                                <td>{{ $penduduk->no_tlp }}</td>
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
          <div class="modal-body">
            <div class="form-group">
              <label for="">NIK</label>
              <input type="number" min="0" name="nik" id="" class="form-control">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
</div>
