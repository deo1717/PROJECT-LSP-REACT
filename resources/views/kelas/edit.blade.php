@extends('main.layout')
@section('content')
<center>
    <h2>EDIT DATA KELAS</h2>
    @if (session('success'))
    <p class="text-success">{{ session('success') }}</p>    
    @endif

    @if (session('error'))
    <p class="text-danger">{{ session('error') }}</p>
    @endif
    <form action="/kelas/update/{{ $kelas->id }}" method="POST">
    @csrf
    <table width="50%">
        <tr>
            <td width="25%">KELAS</td>
            <td><input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}"></td>
        </tr>
        <tr>
            <td width="25%">JURUSAN</td>
            <td width="25%">
                <select name="jurusan_id">
                    <option></option>
                    @foreach ($jurusan as $j)
                    @if ($kelas->jurusan_id == $j ->id)
                    <option value="{{ $j->id }}" selected>{{ $j->nama_jurusan }}</option>
                    @else
                        <option value="{{ $j->id }}">{{ $j->nama_jurusan }}</option>
                    @endif
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <center><button class="button=primary" type="submit">UBAH</button></center>
            </td>
        </tr>
    </table>
    </form>
</center>
@endsection