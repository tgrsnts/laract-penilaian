<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('guru.index', [            
        // 'data' => Guru::all()
        // ]);
        return Inertia::render('Guru/Index', [
            'gurus' => Guru::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('guru.create');
        return Inertia::render('Guru/Create');
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
            'nip' => ['required'],
            'nama_guru' => ['required'],
            'jk' => ['required'],
            'alamat' => ['required'],
            'password' => ['required']
        ]);

        if(Guru::create($data)){
            return redirect('guru')->with('success', 'Data berhasil ditambah');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        // return view('guru.edit', [
        //     'data' => $guru
        // ]);
        return Inertia::render('Guru/Edit', [
            'guru' => $guru
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
        $data = $request->validate([            
            'nip' => ['required'],
            'nama_guru' => ['required'],
            'jk' => ['required'],
            'alamat' => ['required'],
            'password' => ['required']
        ]);

        if($guru->update($data)){
            return redirect('guru')->with('success', 'Data berhasil diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        if($guru->delete()){
            return redirect('guru')->with('success', 'Data berhasil dihapus');
        }
    }
}
