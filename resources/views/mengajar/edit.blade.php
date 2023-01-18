@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>TAMBAH DATA MENGAJAR</h2>
            <a href="/mengajar" class="button-primary">Kembali</a>
            <form action="/mengajar/{{ $data->id }}" method="POST">
                @csrf
                @method('PUT')
                <table>              
                    <tr>
                        <td width="25%">GURU</td>
                        <td width="25%">
                            <select name="guru_id">
                                <option value="" selected>Select</option>
                                @foreach ($gurus as $guru)
                                    <option value="{{ $guru->id }}" {{ $data->guru_id == $guru->id ? "selected" : ""}}>{{ $guru->nama_guru }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">MATA PELAJARAN</td>
                        <td width="25%">
                           <select name="mapel_id" id="">
                            <option value="">Select</option>
                            @foreach ($mapels as $mapel)
                                <option value="{{ $mapel->id }}" {{ $data->mapel_id == $mapel->id ? "selected" : ""}}>{{ $mapel->nama_mapel }}</option>
                            @endforeach
                           </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">KELAS</td>
                        <td width="25%">
                           <select name="kelas_id" id="">
                            <option value="">Select</option>
                            @foreach ($kelas as $kelas)
                                <option value="{{ $kelas->id }}" {{ $data->kelas_id == $kelas->id ? "selected" : ""}}>{{ $kelas->nama_kelas }}</option>
                            @endforeach
                           </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center><button type="submit" class="button-primary">Simpan</button></center>
                        </td>
                    </tr>
                </table>
            </form>
        </b>
    </center>
@endsection
