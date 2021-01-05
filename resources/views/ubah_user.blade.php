@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Ubah Data User</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('user.index') }}" class="btn btn-primary">Kembali</a>
            <form action="{{ route('user.update', $user->id) }}" method="post">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Nama <input type="text" name="name" required value="{{ $user->name }}">
                    Role <input type="text" name="role" required value="{{ $user->role }}">
                    Email <input type="text" name="email" required value="{{ $user->email }}">
                </ul>
                <input type="submit" value="Ubah Data" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection
