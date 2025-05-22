<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class ReviewController extends Controller
{
    // Fungsi untuk menyimpan ulasan
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'rating' => 'required|integer|between:1,5',
            'message' => 'required|string',
        ]);

        // Simpan ulasan ke dalam tabel testimonials
        Testimonial::create([
            'name' => $request->name,
            'email' => $request->email,
            'rating' => $request->rating,
            'message' => $request->message,
        ]);

        // Redirect kembali dengan pesan sukses
     return redirect()->to(route('home') . '#ulasan')
    ->with('success', 'Ulasan Anda telah dikirim!');
    }

    // Menampilkan halaman utama dan mengambil data testimonial
  public function index()
    {
    $testimonials = Testimonial::all(); // Mengambil semua data dari tabel testimonials
    return view('main', compact('testimonials')); // Kirim ke view main.blade.php
    }

}
