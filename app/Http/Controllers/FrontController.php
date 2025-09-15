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

    // VIDEO
    public function videos(){
        $video = Video::all(); // Ambil semua data dari tabel Video
        return view('front.MyVideo.myvideo',compact('video'));
    }
    private function convertToEmbedLink($link)
    {
        preg_match('/(?:https?:\/\/)?(?:www\.)?youtu\.be\/([^\?])|youtube\.com\/.*v=([^\&])/', $link, $matches);
        $videoId = $matches[1] ?? $matches[2] ?? null;

        if ($videoId) {
            return "https://www.youtube.com/embed/{$videoId}";
        }

        return $link; // Return original if no match
    }
    public function searchVideo(Request $request)
{
    $query = $request->input('query');
    $video = Video::where('judul', 'LIKE', "%$query%")
            ->get()
            ->toArray();
    return response()->json($video);
}

    // MUROTTAL
    public function mymurottal(){
        return view('front.MyMurottal.mymurottal');
    }
}
