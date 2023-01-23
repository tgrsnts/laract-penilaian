<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        if (session('user')) {
            return back();
        }
        return Inertia::render('Login');
    }

    public function home()
    {
        return Inertia::render('Home');
    }

    public function loginAdmin(Request $request)
    {
        $auth = Administrator::where('id_admin', $request->idAdmin)->where('password', $request->password)->first();

        if (!$auth) return back()->with('error', 'Kode Admin atau Password anda salah');

        $auth->role = 'admin';
        session(['user' => $auth]);        
        return redirect('/home');
    }

    public function loginSiswa(Request $request)
    {
        $auth = Siswa::where('nis', $request->nis)->where('password', $request->password)->first();

        if (!$auth) return back()->with('error', 'NIS atau Password anda salah');

        $auth->role = 'siswa';
        session(['user' => $auth]);
        return redirect('/home');
    }

    public function loginGuru(Request $request)
    {
        $auth = Guru::where('nip', $request->nip)->where('password', $request->password)->first();

        if (!$auth) return back()->with('error', 'NIP atau Password anda salah');

        $auth->role = 'guru';        
        session(['user' => $auth]);
        return redirect('/home');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
