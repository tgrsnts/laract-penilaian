@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>EDIT DATA MAPEL</h2>
            <a href="/mapel" class="button-primary">Kembali</a>
            <form action="/mapel/{{ $data->id }}" method="POST">
                @csrf
                @method('PUT')
                <table>
                    <tr>
                        <td width="25%">Mata Pelajaran</td>
                        <td width="25%"><input type="text" name="nama_mapel" value="{{ $data->nama_mapel }}"></td>
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
