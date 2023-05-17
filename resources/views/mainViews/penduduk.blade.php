@extends('layouts.layout')
@section('content')
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
                            <th>Alamat</th>
                            <th>No HP</th>
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
