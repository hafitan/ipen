@extends('layouts.layout')
@section('content')
    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> --}}
    <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
    Create
</button> --}}
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            {{-- <th width="200px">Action</th> --}}
                        </tr>
                    </thead>
                    @php $no = 1; @endphp
                    @foreach ($users as $user)
                        <tbody>
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                            {{-- <td>
                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">

                                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" onclick="return confirm('Are you sure you want to delete {{ $user->nama }}?');" class="btn btn-danger">Delete</button>
                                </form>
                            </td> --}}
                        </tr>

                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

