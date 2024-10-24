@extends('layouts.app')

@section('content')
    <div>
        <div class="mb-3 mt-2 m-3">
            <a href="{{ route('user.list') }}" class="btn btn-success">List User</a>
        </div>
        <h1><img src="{{ $user->foto ?? asset('path/to/default-foto.jpg') }}" alt="Foto {{ $user->nama }}" width="50" height="50" class="rounded"></h1>
        <form action="{{ route('user.update', $user['id']) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="nama">Nama:</label><br>
                <input type="text" id="nama" name="nama" value="{{ old('nama', $user->nama) }}" placeholder="Nama anda" required><br>
            </div>

            <div>
                <label for="npm">NPM:</label><br>
                <input type="text" id="npm" name="npm" value="{{ old('npm', $user->npm) }}" placeholder="NPM anda" required><br>
            </div>

            <div>
                <label for="id_kelas">Kelas:</label><br>
                <select name="kelas_id" id="kelas_id" required><br><br>
                @foreach($kelas as $kelasItem)
                <option value ="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                {{ $kelasItem->nama_kelas }}
                </option>
                @endforeach
            </select><br><br>
            </div>

            <div>
                <label for="foto">Foto:</label><br>
                <input type="file" id="foto" name="foto" required><br>
                @if ($user->foto)
                <img src="{{ asset('storage/uploads/' . $user->foto) }}" alt="Foto User" width="100">
                @endif
            </div>

            <button><input type="submit" value="Submit"></button>
            <a href="{{ route('user.list') }}" class="btn btn-danger">Kembali</a>
        </form>
    </div> 

@endsection