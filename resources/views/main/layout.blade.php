<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARACT PENILAIAN SISWA</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div>
        {{-- HEADER --}}
        <div class="header">
            <img src="{{ asset('/gambar/header.jpg') }}" width="100%" class="d-block">
        </div>

        {{-- MENU  --}}
        <div class="menu">
            <b>
                <a href="/home">HOME</a>
                @if (session('user')->role == 'admin')
                <a href="/guru">GURU</a>
                <a href="/jurusan">JURUSAN</a>
                <a href="/kelas">KELAS</a>
                <a href="/siswa">SISWA</a>
                <a href="/mapel">MAPEL</a>
                <a href="/mengajar">MENGAJAR</a>
                @else
                <a href="/nilai">NILAI</a>
                @endif
                <a href="/logout">LOGOUT</a>               
                </form>
                
            </b>
        </div>
        {{-- CONTENT  --}}
        @yield('content')

        {{-- FOOTER  --}}
        <div class="footer">
            <center>
                <p>
                    &copy; {{ date('Y') }} - UJIKOM LSP
                </p>
            </center>
        </div>
    </div>

</body>

</html>
