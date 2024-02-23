<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BukuController extends Controller
{
    public function index(): View
    {
        $posts = Buku::latest()->paginate(5);

        return view('posts.index', compact('posts'));
    }
}
