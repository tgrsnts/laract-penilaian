@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>EDIT DATA KELAS</h2>
            <a href="/kelas" class="button-primary">Kembali</a>
            <form action="/kelas/{{ $data->id }}" method="POST">
                @csrf
                @method('PUT')
                <table>
                    <tr>
                        <td width="25%">KELAS</td>
                        <td width="25%"><input type="text" name="nama_kelas" value="{{ $data->nama_kelas }}"></td>
                    </tr>
                    <tr>
                        <td width="25%">JURUSAN</td>
                        <td width="25%">
                            <select name="jurusan_id">
                                <option value="" selected>Select</option>
                                @foreach ($jurusans as $jurusan)
                                    <option value="{{ $jurusan->id }}" {{ $data->jurusan_id == $jurusan->id ? 'selected' : '' }} >{{ $jurusan->nama_jurusan }}</option>
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
