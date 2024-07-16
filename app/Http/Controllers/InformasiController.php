<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'judul' => 'Informasi',
            'informasi' => Informasi::latest()->get(),
        ];

        return view('back.informasi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.informasi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $filename = null;
        if ($request->hasFile('foto')) {
            $filename = $request->file('foto')->store('informasi', 'public');
        }

        Informasi::create([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'foto' => $filename,
        ]);

        return redirect('informasi')->with('status', 'Informasi created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Informasi $informasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        // dd($id);

        $informasi = Informasi::find($id);

        return view('back.informasi.edit', compact('informasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $informasi = Informasi::find($id);

        if (!$informasi) {
            return redirect('informasi')->withErrors(['msg' => 'Informasi not found']);
        }

        $informasi->judul = $request->input('judul', $informasi->judul);
        $informasi->konten = $request->input('konten', $informasi->konten);

        if ($request->hasFile('foto')) {
            $filename = $request->file('foto')->store('informasi', 'public');
            $informasi->foto = $filename;
        }

        $informasi->save();

        return redirect('informasi')->with('status', 'Informasi updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Informasi $informasi)
    {
        $informasi->delete();
        return redirect('informasi');
    }
}
