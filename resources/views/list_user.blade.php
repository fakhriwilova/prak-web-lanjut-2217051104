@extends('layouts.app')

@section('content')
<p>Ini Halaman List</p>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user){
        ?>
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->npm }}</td>
                <td>{{ $user->kelas->nama_kelas }}</td>
                <td>
                    <!-- Aksi Edit -->
                    <a href=class="btn btn-warning btn-sm">Edit</a>
                    
                    <!-- Aksi Hapus -->
                    <form action=method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
@endsection
