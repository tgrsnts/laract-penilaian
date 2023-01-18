@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>EDIT DATA GURU</h2>
            <a href="/guru" class="button-primary">Kembali</a>
            <form action="/guru/{{ $data->id }}" method="POST">
                @csrf
                @method('PUT')
                <table>
                    <tr>
                        <td width="25%">NIP</td>
                        <td width="25%"><input type="text" name="nip" value="{{ $data->nip }}"></td>
                    </tr>
                    <tr>
                        <td width="25%">NAMA GURU</td>
                        <td width="25%"><input type="text" name="nama_guru" value="{{ $data->nama_guru }}"></td>
                    </tr>
                    <tr>
                        <td width="25%">JENIS KELAMIN</td>
                        <td width="25%">
                            <select name="jk" id="">
                                <option value="" selected>Select</option>
                                <option value="L" {{ $data->jk == 'L' ? 'selected' : ''}}>Laki-laki</option>
                                <option value="P" {{ $data->jk == 'P' ? 'selected' : ''}}>Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">ALAMAT</td>
                        <td width="25%"><input type="text" name="alamat" value="{{ $data->alamat }}"></td>
                    </tr>
                    <tr>
                        <td width="25%">PASSWORD</td>
                        <td width="25%"><input type="password" name="password" value="{{ $data->password }}"></td>
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
