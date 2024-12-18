<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mutabaah;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index($id)
    {
        $mutabaah = Mutabaah::where('user_id', $id)->get();
        $reviews = Review::whereIn('mutabaah_id', $mutabaah->pluck('id'))->get();
        return view('admin.Review.index', compact('reviews', 'mutabaah'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'admin_id' => 'required',
            'mutabaah_id' => 'required',
            'respon' => 'required',
        ]);
        Review::create([
            'admin_id' => $request->admin_id,
            'mutabaah_id' => $request->mutabaah_id,
            'respon' => $request->respon,
        ]);

        $mutabaah = Mutabaah::find($request->mutabaah_id);
        $userId = $mutabaah->user_id;

        return redirect()->route('data.review', $userId);
    }

    public function destroy($id)
    {
        // Mengambil review berdasarkan ID
        $review = Review::find($id);

        if ($review) {
            // Mengambil mutabaah yang terkait dengan review
            $mutabaah = Mutabaah::find($review->mutabaah_id);

            if ($mutabaah) {
                // Mengambil user_id dari mutabaah
                $user_id = $mutabaah->user_id;

                // Menghapus review
                $review->delete();

                // Mengarahkan kembali ke halaman /dashboard/review/{user_id}
                return redirect()->route('data.review', ['id' => $user_id])
                    ->with('success', 'Review berhasil dihapus');
            } else {
                // Jika mutabaah tidak ditemukan
                return redirect()->route('data.review', ['id' => $review->mutabaah_id])
                    ->with('error', 'Mutabaah terkait tidak ditemukan');
            }
        } else {
            // Jika review tidak ditemukan, coba cari user_id terkait
            $review = Review::find($id);  // Ambil review lagi untuk memastikan user_id
            $mutabaah = Mutabaah::find($review->mutabaah_id);

            if ($mutabaah) {
                $user_id = $mutabaah->user_id;
                return redirect()->route('data.review', ['id' => $user_id])
                    ->with('error', 'Review tidak ditemukan');
            }

            // Kalau tidak ditemukan sama sekali
            return redirect()->route('data.review', ['id' => ''])
                ->with('error', 'Review atau mutabaah tidak ditemukan');
        }
    }
}