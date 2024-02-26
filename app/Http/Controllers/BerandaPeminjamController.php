<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaPeminjamController extends Controller
{
    public function index()
    {
        return view('peminjam.dashboard_index');
    }
}
