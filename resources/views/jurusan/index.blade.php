@extends('main.layout') {{-- penandabahwakitamenggunakanfilelayoutsebagailayoutwebsitekita --}}
@section('content') {{-- menampilkan segala tag html yang sudah dibuat --}}
<center>
    <b>
        <h2>LIST JURUSAN SMKN 1 CIBINONG</h2>
        <a href="/jurusan/create" class="button-primary">TAMBAH DATA JURUSAN</a>
        @if (session('success'))
        <p class="text-success">{{ session('success') }}</p>    
        @endif

        @if (session('error'))
        <p class="text-danger">{{ session('error') }}</p>
        @endif
        <table cellpadding="10">
            <tr>
                <th>NO</th>
                <th>JURUSAN</th>
                <th>ACTION</th>
            </tr>
            @foreach ($jurusan as $j)
            <tr>
                <td>{{ $loop->iteration}}</td> {{-- memanggil no 1 dari index --}}
                <td>{{ $j->nama_jurusan }}</td>
                <td>
                    <a href="/jurusan/edit/{{ $j->id }}" class="button-warning">EDIT</a>
                    <a href="/jurusan/destroy/{{ $j->id }}" class="button-danger" onclick="return confirm ('Yakin ingin menghapus??')">HAPUS</a>
                </td>
            </tr>
                
            @endforeach
        </table>
    </b>
</center>
@endsection