<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    public function index(){
        $artikel = Artikel::all();
        return view('admin.artikel.artikel', compact('artikel'));
    }
    public function form(){
        return view('admin.artikel.formArtikel');
    }
    public function create(Request $request){
        Artikel::create([
            'user_id' => Auth::user()->id,
            'sumber' => $request->sumber,
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'link' => $request->link,
            'img' => $request->file(key: 'img')->store('img-artikel'),
         ]);
         return redirect()->route('artikel');
        }    

        public function edit($id){

            $artikel = Artikel::findOrFail($id);
            return view('admin.artikel.editArtikel', compact('artikel'));
        }


         public function delete(Request $request){
            $artikel = Artikel::findOrFail($request->id);
            $artikel->delete();
        
            return redirect()->back()->with('Delete', 'Artikel berhasil dihapus');
        }
    
        public function update(Request $request, $id){
                    $artikel = Artikel::findOrFail($id);
    
                        $artikel->update([
                            'sumber' => $request->sumber,
                            'judul' => $request->judul,
                            'kategori' => $request->kategori,
                            'link' => $request->link,
                            'img' => $request->file(key: 'img')->store('img-artikel
                            '),
                        ]);
                    
                    return redirect()->route('artikel')->with('Sukses', 'Artikel berhasil diubah');
                }
}
