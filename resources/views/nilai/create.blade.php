@extends('main.layout')
@section('content')
<center>
    <h2>TAMBAH DATA NILAI</h2>
    @if (session('success'))
    <p class="text-success">{{ session('success') }}</p>    
    @endif

    <form action="/nilai/store" method="POST">
    @csrf
    <table width="50%">
        <tr>
            <td width="25%">GURU MAPEL</td>
            <td width="25%">
                <select name="mengajar_id">
                    <option>Pilih Mata Pelajaran</option>
                    @foreach ($mengajar as $each)
                    <option value="{{ $each->id }}">
                        {{ $each->mapel->nama_mapel }}</option>   
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td width="25%">SISWA</td>
            <td width="25%">
                <select name="siswa_id">
                    <option>Pilih Nama Siswa</option>
                    @foreach ($siswa as $each)
                    <option value="{{ $each->id }}">{{ $each->nama_siswa }}</option>   
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td class="bar">UH</td>
            <td class="bar">
                <input type="number" name="uh">
            </td>
        </tr>
        <tr>
            <td class="bar">UTS</td>
            <td class="bar">
                <input type="number" name="uts">
            </td>
        </tr>
        <tr>
            <td class="bar">UAS</td>
            <td class="bar">
                <input type="number" name="uas">
            </td>
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