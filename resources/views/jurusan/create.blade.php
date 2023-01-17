@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>TAMBAH DATA JURUSAN</h2>
            <a href="/jurusan" class="button-primary">Kembali</a>
            <form action="" method="POST">
                @csrf
                <table>
                    <tr>
                        <td width="25%">JURUSAN</td>
                        <td width="25%"><input type="text" name="nama_jurusan"></td>
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
