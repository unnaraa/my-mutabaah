<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        return view('front.ini');
    }
// VIDEO
    public function front(){
        $videop = Video::all(); // Ambil semua data dari tabel Video
        return view('front.ini', ['videop' => Video::all()]);
    }

    // ARTIKEL
    public function myartikel(){
        $artikels = Artikel::all();
        $kategoris = Artikel::select('kategori')->distinct()->pluck('kategori'); // Ambil kategori unik
        return view('front.MyArtikel.myartikel', compact('artikels', 'kategoris'));
    }
    public function searchArtikel(Request $request)
{
    $query = $request->input('query');
    $artikels = Artikel::where('judul', 'LIKE', "%$query%")
                ->orWhere('sumber', 'LIKE', "%$query%")
                ->get();

    return response()->json($artikels);
}
public function filterArtikel(Request $request)
{
    $kategori = $request->input('kategori');

    // Filter artikel berdasarkan kategori, jika ada
    $artikels = Artikel::when($kategori, function ($query, $kategori) {
                    return $query->where('kategori', $kategori);
                })->get();

    return response()->json($artikels);
}



    // MUROTTAL
    public function mymurottal(){
        return view('front.MyMurottal.mymurottal');
    }
}
