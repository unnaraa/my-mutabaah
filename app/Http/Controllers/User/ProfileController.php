<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Biodata;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profileUser(){
        
        $biodata = Biodata::all();
        return view('user.profile.profile', compact('biodata'));
    }
    public function formProfile(){
    return view('user.profile.daftar');
    }
    public function daftarMutabaah(Request $request){
        $validator = Validator::make($request->all(), [
            'nomor_hp' => 'required|digits_between:10,15',
            'kelas' => 'required|in:pemula,lancar-tahsin',
        ]);
        
        Biodata::create([
            'user_id' => Auth::user()->id,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'nomor_hp' => $request->nomor_hp,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'kelas' => $request->kelas,
            'foto' => $request->file('foto')->store(path: 'foto-profile')
        ]);
        return redirect()->route('profile.user');
    }
}
