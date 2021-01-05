@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Siswa</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('siswa.create') }}"> Tambah Data Siswa</a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Tanggal Lahir</th>
                    <th>AKSI</th>
                </tr>
                @foreach ($siswa as $s)
                <tr>
                    <td>{{ $s -> nama}}</td>
                    <td>{{ $s -> nis }}</td>
                    <td>{{ $s -> tgl_lahir}}</td>
                    <td>
                        <ul class="nav">
                            <a href="{{ route ('siswa.show', $s -> id) }}" class="btn btn-success mr-2">Show</a>
                            <a href="{{ route ('siswa.edit', $s -> id) }}" class="btn btn-primary mr-2">Edit</a>
                            <form action="{{ route ('siswa.destroy', $s -> id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-warning">Delete</button>
                            </form>
                        </ul>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
                    
