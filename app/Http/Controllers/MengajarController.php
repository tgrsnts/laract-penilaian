<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Mengajar;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class MengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mengajar.index', [
            'data' => Mengajar::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mengajar.create', [
            'gurus' => Guru::all(),
            'kelas' => Kelas::all(),
            'mapels' => Mapel::all()
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
            'guru_id' => ['required'],            
            'mapel_id' => ['required'],
            'kelas_id' => ['required']
        ]);

        if (Mengajar::create($data)) {
            return redirect('/mengajar')->with('success', 'Data berhasil ditambah');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mengajar  $mengajar
     * @return \Illuminate\Http\Response
     */
    public function show(Mengajar $mengajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mengajar  $mengajar
     * @return \Illuminate\Http\Response
     */
    public function edit(Mengajar $mengajar)
    {
        return view('mengajar.edit', [
            'data' => $mengajar,
            'gurus' => Guru::all(),
            'kelas' => Kelas::all(),
            'mapels' => Mapel::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mengajar  $mengajar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mengajar $mengajar)
    {
        $data = $request->validate([
            'guru_id' => ['required'],            
            'mapel_id' => ['required'],
            'kelas_id' => ['required']
        ]);

        if ($mengajar->update($data)) {
            return redirect('/mengajar')->with('success', 'Data berhasil diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mengajar  $mengajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mengajar $mengajar)
    {
        if($mengajar->delete()){
            return redirect('/mengajar')->with('success', 'Data berhasil dihapus');
        }
    }
}
