<?php

namespace App\Http\Controllers;

use App\Models\Mengajar;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session('user')->role == "guru"){
            $nilai = Nilai::whereHas('mengajar', function($query){
                $query->where('guru_id', session('user')->id);
            })->get();
        } else {
            $nilai = Nilai::whereHas('siswa', function($query){
                $query->where('nis', session('user')->nis);
            })->get();
        }
        return view('nilai.index', [
            'data' => $nilai
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nilai.create', [
            'mengajars' => Mengajar::all(),
            'siswas' => Siswa::all(),        
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'mengajar_id' => ['required'],
            'siswa_id' => ['required'],
            'uh' => ['required'],
            'uts' => ['required'],
            'uas' => ['required'],
            'na' => ['required'],
        ]);

        if (Nilai::create($data)) {
            return redirect('/nilai')->with('success', 'Data berhasil ditambah');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(Nilai $nilai)
    {
        return view('nilai.edit', [
            'data' => $nilai,
            'mengajars' => Mengajar::all(),
            'siswas' => Siswa::all(),        
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nilai $nilai)
    {
        $data = $request->validate([
            'mengajar_id' => ['required'],
            'siswa_id' => ['required'],
            'uh' => ['required'],
            'uts' => ['required'],
            'uas' => ['required'],
            'na' => ['required'],
        ]);

        if ($nilai->update($data)) {
            return redirect('/nilai')->with('success', 'Data berhasil diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
}
