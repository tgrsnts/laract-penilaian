@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>EDIT DATA SISWA</h2>
            <a href="/siswa" class="button-primary">Kembali</a>
            <form action="/siswa/{{ $data->id }}" method="POST">
                @csrf
                @method('PUT')
                <table> 
                    <tr>
                        <td width="25%">NIS</td>
                        <td width="25%"><input type="text" name="nis" value="{{ $data->nis }}"></td>
                    </tr>
                    <tr>
                        <td width="25%">NAMA SISWA</td>
                        <td width="25%"><input type="text" name="nama_siswa" value="{{ $data->nama_siswa }}"></td>
                    </tr>
                    <tr>
                        <td width="25%">JENIS KELAMIN</td>
                        <td width="25%">
                            <input type="radio" name="jk" value="L" {{ $data->jk == "L" ? "selected" : "" }}>Laki-laki
                            <input type="radio" name="jk" value="P" {{ $data->jk == "P" ? "selected" : "" }}>Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">ALAMAT</td>
                        <td width="25%"><textarea name="alamat" id="" cols="30" rows="5">{{ $data->alamat }}</textarea></td>
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
