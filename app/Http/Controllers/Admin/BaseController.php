<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    public function index()
    {
        // Buat daftar bulan Januari hingga Desember
        $months = [
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December'
        ];

        // Mengambil data jumlah aktivitas per bulan dari database
        $data = DB::table('mutabaah')
            ->select(DB::raw('MONTH(tanggal) as month'), DB::raw('COUNT(id) as total'))
            ->whereYear('tanggal', date('Y')) // Hanya data tahun ini
            ->groupBy(DB::raw('MONTH(tanggal)'))
            ->orderBy(DB::raw('MONTH(tanggal)'))
            ->get()
            ->keyBy('month'); // Mengubah menjadi key-value berdasarkan bulan

        // Format data dengan mengisi nilai 0 untuk bulan yang tidak ada
        $labels = [];
        $values = [];

        foreach ($months as $monthNumber => $monthName) {
            $labels[] = $monthName; // Nama bulan
            $values[] = $data->get($monthNumber)->total ?? 0; // Jumlah aktivitas atau 0 jika tidak ada
        }

        return view('template.base', [
            'labels' => $labels,
            'values' => $values,
        ]);
    }
}
