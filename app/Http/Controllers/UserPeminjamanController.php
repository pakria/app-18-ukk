<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;

class UserPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $peminjaman = Peminjaman::with('user', 'buku')->where('user_id', $userId)->get();
        return view('peminjam.peminjaman.buku_pinjaman', compact('peminjaman'));


    }
    public function dataPinjam()
    {
        $peminjaman = Peminjaman::with('user', 'buku')->where('status', 'dipinjam')->get();
        return view('peminjam.peminjaman.data-pinjaman', compact('peminjaman'));
    }
    public function kembali(Request $request, $id)
    {
        $pinjam = Peminjaman::findOrFail($id);
        $pinjam->status = 'Dikembalikan';
        $pinjam->save();

        $buku = $pinjam->buku;
        $buku->stok++;
        $buku->save();

        return redirect()->route('data-peminjaman.index');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $user = User::findOrFail(Auth::id());
        $buku = Buku::findOrFail($id);
        return view('peminjam.peminjaman.peminjaman_create', compact('user', 'buku'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'buku_id' =>'required',
            'user_id' =>'required',
            'jumlah' =>'numeric',
            'status'=>'required',
        ]);
        $peminjaman = Peminjaman::create([
            'buku_id' =>$request->buku_id,
            'user_id' =>$request->user_id,
            'jumlah' =>$request->jumlah,
            'status' =>$request->status,
        ]);
        $buku = Buku::findOrFail($request->buku_id);
        $buku->stok -= $request->jumlah;
        $buku->save();

        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
