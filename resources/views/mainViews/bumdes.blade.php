@extends('layouts.layout')
@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Bumdes</h6>
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
                            <th>Produk</th>
                            <th>penghasilan</th>
                            <th>Tanggal input</th>
                        </tr>
                    </thead>
                        @php $no = 1; @endphp
                        @foreach ($bumdes as $bum)
                            <tbody>
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $bum->nik }}</td>
                                    <td>{{ $bum->nama }}</td>
                                    <td>{{ $bum->rt }}</td>
                                    <td>{{ $bum->rw }}</td>
                                    <td>{{ $bum->alamat }}</td>
                                    <td>{{ $bum->produk }}</td>
                                    <td>{{ $bum->penghasilan }}</td>
                                    <td>{{ $bum->tanggal_input }}</td>
                                </tr>
                            </tbody>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
