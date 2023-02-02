@extends('main.layout')
@section('content')
<center>
    <h2>TAMBAH DATA SISWA</h2>
    @if (session('success'))
    <p class="text-success">{{ session('success') }}</p>    
    @endif

    @if (session('error'))
    <p class="text-danger">{{ session('error') }}</p>
    @endif
    <form action="/siswa/store" method="POST">
    @csrf
    <table width="50%">
        <tr>
            <td width="25%">NIS</td>
            <td width="25%"><input type="text" name="nis"></td>
        </tr>
        <tr>
            <td width="25%">NAMA SISWA</td>
            <td width="25%"><input type="text" name="nama_siswa"></td>
        </tr>
        <tr>
            <td width="25%">JENIS KELAMIN</td>
            <td width="25%">
                <input type="radio" name="jk" value="L">Laki-Laki
                <input type="radio" name="jk" value="P">Perempuan
            </td>
        </tr>
        <tr>
            <td width="25%">ALAMAT</td>
            <td width="25%"><textarea name="alamat" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td width="25%">KELAS</td>
            <td width="25%">
                <select name="kelas_id">
                    <option></option>
                    @foreach ($kelas as $k)
                    <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>   
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td width="25%">PASSWORD</td>
            <td width="25%"><input type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan="2">
                <center><button type="submit" class="button-primary">SIMPAN</button></center>
            </td>
        </tr>
    </table>
    </form>
</center>
@endsection