@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>TAMBAH DATA MAPEL</h2>
            <a href="/mapel" class="button-primary">Kembali</a>
            <form action="/mapel" method="POST">
                @csrf
                <table>
                    <tr>
                        <td width="25%">Mata Pelajaran</td>
                        <td width="25%"><input type="text" name="nama_mapel"></td>
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
