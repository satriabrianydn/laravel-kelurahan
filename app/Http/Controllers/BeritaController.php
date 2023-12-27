<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function showBerita()
    {
        $beritas = Berita::all(); // Fetch all news from the database
        return view('home.berita', ['beritas' => $beritas]);
    }

    public function showTambahBerita() {
        return view('berita.addberita');
    }

    public function addBeritaProcess(Request $request) {
         // Validate the form data
         $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'required|url',
            'pdf_link' => 'required|url',
        ]);

        // Create a new Berita instance
        $berita = new Berita($request->all());

        // Save the news to the database
        $berita->save();

        // Optionally, you can redirect to the news page or show a success message
        return redirect()->route('home.berita')->with('success', 'Berita berhasil ditambahkan.');
    }
}
