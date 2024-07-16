<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendaftar = Pendaftaran::latest()->get();

        return view('back.pendaftar.index', compact('pendaftar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        // return view('')
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $pendaftaran = new Pendaftaran();
        $pendaftaran->nama = $request->input('nama');
        $pendaftaran->tanggal_lahir = $request->input('tanggal_lahir');
        $pendaftaran->telp = $request->input('telp');
        $pendaftaran->alamat = $request->input('alamat');
        $pendaftaran->save();

        return redirect('/')->with('status', 'Pendaftaran created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        //
    }
}
