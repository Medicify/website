<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Post;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()

    {
        $post = Post::latest()->take(3)->get();
        return view('home.index', compact('post'));
    }
    public function show($slug)
    {
        // Ambil data konten blog berdasarkan slug
        $post = Post::where('slug', $slug)->first();

        // Periksa apakah post ada
        if (!$post) {
            abort(404); // Tampilkan halaman 404 jika tidak ada
        }

        // Ambil postingan terbaru (untuk recent posts)
        $recentPosts = Post::orderBy('created_at', 'desc')->take(3)->get();

        // Ambil daftar kategori
        $categories = Kategori::select('id', 'nama', 'slug')->take(5)->get();

        return view('home.kontendetail', compact('post', 'recentPosts', 'categories'));
    }
    public function blog()
    {
        $posts = Post::latest()->get();
        return view('home.blog', compact('posts'));
    }
}
