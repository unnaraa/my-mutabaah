<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mutabaah;
use App\Models\Surah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class MutabaahController extends Controller
{
    public function mutabaah(Request $request) {
        $user = Auth::id();
        $query = Mutabaah::where('user_id', $user);
    
        // Cek apakah ada filter status dari request
        if ($request->has('filter_status') && $request->filter_status != '') {
            $query->where('status', $request->filter_status);
        }
        // Ambil data dengan filter (jika ada)
        $form = $query->get();
        return view('user.mutabaah.mutabaah', compact('form'));
    }
    
    public function formMutabaah(){
        $surah = Surah::all();
        return view('user.mutabaah.formMutabaah', compact( 'surah'));
    }
    public function userMutabaah(Request $request)
    {
        // Logika untuk menangani data berdasarkan slug
        $filter_status = $request->input('filter_status');
        $form = Mutabaah::where('user_id', Auth::user()->id)            
        ->when($filter_status, function ($query, $status) {
                return $query->where('status', $status);
            })
            ->get();
    
        return view('user.mutabaah.mutabaah', compact('form'));
    }
    

    public function createMutabaah(Request $request){
        $request->validate([
            'tanggal' => 'required|date',
            'surah_id' => 'required|integer',
            'juz' => 'required|integer|min:1|max:30',
            'ayat_mulai' => 'required|integer',
            'ayat_akhir' => 'required|integer',
            'status' => 'required|string',
            'desc' => 'nullable|string',
        ]);
        Mutabaah::create([
            'user_id' => Auth::user()->id,
            'tanggal' => $request->tanggal,
            'surah_id' => $request->surah_id,
            'ayat_mulai' => $request->ayat_mulai,
            'ayat_akhir' => $request->ayat_akhir,
            'juz' => $request->input('juz'),
            'status' => $request->status,
            'desc' => $request->desc,
            'slug' => Str::slug($request->user_id),

         ]);
         return redirect()->route('mutabaah');
         }    

         public function hapusMutabaah(Mutabaah $mutabaah){
        $userId = $mutabaah->user_id; 
        $mutabaah->delete();
        return redirect()->back();
        }
}
