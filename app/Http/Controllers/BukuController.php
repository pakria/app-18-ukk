<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;

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
            'thn_terbit'  => 'required',
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
            'thn_terbit'  => $request->get('thn_terbit'),
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
        $buku = Buku::findOrFail($id);
        $kategori = Kategori::all();
        return view('admin.buku.buku_edit',[
            'buku' =>$buku,
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'penulis'   => 'required',
            'penerbit'  => 'required',
            'thn_terbit' => 'required',
            'deskripsi' => 'required',
            'cover'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kategori'  => 'required|array',  
          
        ]);

        //check if image is uploaded
        if ($request->hasFile('cover')) {

            //upload new image
            $cover = $request->file('cover');
            $cover->storeAs('public/buku', $cover->hashName());

            //delete old image
            Storage::delete('public/buku/'.$buku->image);

            //update post with new image
            $buku->update([
                'cover'     => $cover->hashName(),
                'judul'     => $request->get('judul'),
                'penulis'   => $request->get('penulis'),
                'penerbit'  => $request->get('penerbit'),
                'thn_terbit' => $request->get('thn_terbit'),
                'deskripsi' => $request->get('deskripsi'),
                
            ]);
            $buku->kategori()->sync($request->input('kategori'));

        } else {

            //update post without image
            $buku->update([
                'judul'     => $request->get('judul'),
                'penulis'   => $request->get('penulis'),
                'penerbit'  => $request->get('penerbit'),
                'thn_terbit' => $request->get('thn_terbit'),
                'deskripsi' => $request->get('deskripsi'),
            ]);
            $buku->kategori()->sync($request->input('kategori'));
        }
        //redirect to index
        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
                
        
    }
}
