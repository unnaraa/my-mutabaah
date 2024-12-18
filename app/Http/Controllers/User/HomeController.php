<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Mutabaah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function homeUser()
{
    // Misal, data diambil dari model Mutabaah
    $data = Mutabaah::select('tanggal', 'ayat')
        ->where('user_id', Auth::id()) // Hanya data untuk user yang sedang login
        ->get()
        ->toArray();

    // Passing data ke view
    return view('user.home.home', compact('data'));
}

}
