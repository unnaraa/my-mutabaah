<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(){
        $videos = Video::all();
        return view('admin.video.video', compact('videos'));
    }
  
    public function form(){
        return view('admin.video.formVideo');
    }
    public function create(Request $request){
        Video::create([
            'judul' => $request->judul,
            'link' => $request->link,
            'img' => $request->img,
         ]);
         return redirect()->route('video');
        }    

        public function edit($id){

            $videos = Video::findOrFail($id);
            return view('admin.video.editVideo', compact('videos'));
        }


         public function delete(Request $request){
            $videos = Video::findOrFail($request->id);
            $videos->delete();
        
            return redirect()->back()->with('Delete', 'Video berhasil dihapus');
        }
    
        public function update(Request $request, $id){
                    $videos = Video::findOrFail($id);
    
                        $videos->update([
                            'judul' => $request->judul,
                            'link' => $request->link,
                            'img' => $request->img,
                        ]);
                    
                    return redirect()->route('video')->with('Sukses', 'video berhasil diubah');
                }
}
