<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Biodata;
use App\Models\Mutabaah;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('mutabaah')->get(); // Ambil semua user beserta data mutabaah mereka

        $users->map(function ($user) {
            // Periksa apakah user mengisi mutabaah hari ini
            $today = Carbon::today();
            $hasMutabaahToday = $user->mutabaah->where('tanggal', $today)->count() > 0;

            // Tentukan status berdasarkan pengisian hari ini
            $user->status = $hasMutabaahToday ? 'Active' : 'Non-Active';
            return $user;
        });
        return view('admin.datauser.index', compact('users'));
    }
    public function detail($id)
    {
        $biodata = Biodata::where('user_id', $id)->get(); // Ambil user berdasarkan ID
        return view('admin.datauser.profile', compact('biodata'));
    }
    public function mutabaah($id)
    {
        $mutabaah = Mutabaah::where('user_id', $id)->get(); // Ambil semua data berdasarkan user_id
        $biodata = User::find($id); // Ambil data user berdasarkan ID
        return view('admin.datauser.mutabaahUser', compact('mutabaah', 'biodata'));
    }
    public function destroyMutabaah(Mutabaah $mutabaah)
    {
        $userId = $mutabaah->user_id; 
        $mutabaah->delete();
        return redirect()->route('data.user.mutabaah', ['id' => $userId]);
    }
}