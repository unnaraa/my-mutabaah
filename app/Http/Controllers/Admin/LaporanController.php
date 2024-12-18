<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = laporan::all();
        return view('admin.laporan.index', compact('laporan'));
    }

    public function create()
    {
        return view('admin.laporan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi_laporan' => 'required',
        ]);

        laporan::create([
            'judul' => $request->judul,
            'isi_laporan' => $request->isi_laporan,
            'slug' => Str::slug($request->judul),
        ]);
        
        return redirect()->route('data.laporan');
    }
    public function destroy($id)
{
    $laporan = laporan::findOrFail($id);
    $laporan->delete();

    return redirect()->route('data.laporan')->with('success', 'Laporan berhasil dihapus.');
}
}