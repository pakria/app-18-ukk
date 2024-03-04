<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::all();
        
        return view('admin.buku.buku_index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.buku.buku_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'penulis'   => 'required',
            'penerbit'  => 'required',
            'deskripsi' => 'required',
            'cover'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kategori'  => 'required|in:fiksi,nonfiksi',
            
        ]);
        $cover = $request->file('cover');
        $cover->storeAs('public/buku', $cover->hashName());

        $model = Buku::create([
            'cover'     => $cover->hashName(),
            'judul'     => $request->get('judul'),
            'penulis'   => $request->get('penulis'),
            'penerbit'  => $request->get('penerbit'),
            'deskripsi' => $request->get('deskripsi'),
            'kategori'  => $request->get('kategori'),
        ]);
        return redirect()->route('buku.index', $model);
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
