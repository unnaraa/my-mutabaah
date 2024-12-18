<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
class ChartController extends Controller
{
  
public function chart()
{
    // Ambil jumlah pengguna yang bergabung setiap bulan
    $data = User::selectRaw('MONTH(created_at) as month, YEAR(created_at) as year, COUNT(*) as count')
        ->groupBy('year', 'month')
        ->orderBy('year', 'asc')
        ->orderBy('month', 'asc')
        ->get();

    // Passing data ke view
    return view('template.base', compact('data'));
}

}
