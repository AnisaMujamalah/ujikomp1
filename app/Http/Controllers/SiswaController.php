<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('siswa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nisn' => 'required|max:10',
            'nis' => 'required|max:8',
            'nama' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'kelas_id' => 'required',
            'spps_id' => 'required'
        ],[
            'nisn.required'    => 'Nisn Wajib Di Isi',
            'nis.max'         => 'Nis Wajib Di Isi',
        ]);

        dd($request);

        Siswa::create([
            'nisn' => $request -> nisn,
            'nis' => $request -> nis,
            'nama' => $request -> nama,
            'alamat' => $request -> alamat,
            'no_tlp' => $request -> no_tlp,
            'kelas_id' => $request -> kelas_id,
            'spps_id' => $request -> spps_id
        ]);
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswa $siswa)
    {
        //
    }
}