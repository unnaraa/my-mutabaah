<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\laporan;
use App\Models\Mutabaah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function homeUser()
    {
        return view('user.home.home');
    }

    public function laporanUser()
    {
        $laporan = laporan::all();
        return view('user.laporan.index', compact('laporan'));
    }
}
