@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>TAMBAH DATA NILAI</h2>
            <a href="/nilai" class="button-primary">Kembali</a>
            <form action="/nilai" method="POST">
                @csrf
                <table>              
                    <tr>
                        <td width="25%">GURU MAPEL</td>
                        <td width="25%">
                            <select name="mengajar_id">
                                <option value="" selected>Select</option>
                                @foreach ($mengajars as $mengajar)
                                    <option value="{{ $mengajar->id }}">{{ $mengajar->mapel->nama_mapel }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">SISWA</td>
                        <td width="25%">
                           <select name="mapel_id" id="">
                            <option value="">Select</option>
                            @foreach ($siswas as $siswa)
                                <option value="{{ $siswa->id }}">{{ $siswa->nama_siswa }}</option>
                            @endforeach
                           </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">ULANGAN HARIAN</td>
                        <td width="25%">
                           <input type="number" name="uh">
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">ULANGAN TENGAH SEMESTER</td>
                        <td width="25%">
                           <input type="number" name="uts">
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">ULANGAN AKHIR SEMESTER</td>
                        <td width="25%">
                           <input type="number" name="uas">
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">NA</td>
                        <td width="25%">
                           <input type="number" name="na">
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
