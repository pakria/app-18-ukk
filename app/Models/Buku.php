<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    

    protected $table = 'buku';
    protected $fillable = ['judul','penulis','penerbit','thn_terbit','deskripsi','kategori','cover'];
}
