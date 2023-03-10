@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>TAMBAH DATA GURU</h2>
            <a href="/guru" class="button-primary">Kembali</a>
            <form action="/guru" method="POST">
                @csrf
                <table>
                    <tr>
                        <td width="25%">NIP</td>
                        <td width="25%"><input type="text" name="nip"></td>
                    </tr>
                    <tr>
                        <td width="25%">NAMA GURU</td>
                        <td width="25%"><input type="text" name="nama_guru"></td>
                    </tr>
                    <tr>
                        <td width="25%">JENIS KELAMIN</td>
                        <td width="25%">
                            <select name="jk" id="">
                                <option value="" selected>Select</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">ALAMAT</td>
                        <td width="25%"><input type="text" name="alamat"></td>
                    </tr>
                    <tr>
                        <td width="25%">PASSWORD</td>
                        <td width="25%"><input type="password" name="password"></td>
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
