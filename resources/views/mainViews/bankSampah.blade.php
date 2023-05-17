@extends('layouts.layout')
@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Bank Sampah</h6>
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
                            <th>Berat sampah</th>
                            <th>Harga per kg</th>
                            <th>Total harga</th>
                            <th>Tanggal setor</th>
                        </tr>
                    </thead>
                    @php $no = 1; @endphp
                    @foreach ($bankSampah as $bank)
                        <tbody>
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $bank->nik }}</td>
                                <td>{{ $bank->nama }}</td>
                                <td>{{ $bank->rt }}</td>
                                <td>{{ $bank->rw }}</td>
                                <td>{{ $bank->alamat }}</td>
                                <td>{{ $bank->berat_sampah }}</td>
                                <td>{{ $bank->harga_per_kg }}</td>
                                <td>{{ $bank->total_harga }}</td>
                                <td>{{ $bank->tanggal_setor }}</td>
                        </tr>

                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
