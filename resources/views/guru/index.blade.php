@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA GURU</h2>
            <a href="/guru/create" class="button-primary">Tambah Data</a>
            @if (session('success'))            
              <p class="text-succes">{{ session('success') }}</p>  
            @endif
            @if (session('error'))            
              <p class="text-danger">{{ session('error') }}</p>  
            @endif
            <table cellpadding='10'>
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NIP</th>
                        <th>NAMA GURU</th>
                        <th>JENIS KELAMIN</th>
                        <th>ALAMAT</th>
                        <th>PASSWORD</th>
                        <th>ACTION</th>
                    </tr>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nip }}</td>
                            <td>{{ $item->nama_guru }}</td>
                            <td>{{ $item->jk == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->password }}</td>
                            <td>
                                <a href="/guru/{{ $item->id }}/edit">Edit</a>
                                <form action="/guru/{{ $item->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Sure?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trash-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10"
                                                y2="17"></line>
                                            <line x1="14" y1="11" x2="14"
                                                y2="17"></line>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>                           
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </b>
    </center>
@endsection