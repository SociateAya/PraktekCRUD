<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    //memanggil tabel buku
    protected $table = 'tb_buku';
    public $timestamps = false;
    protected $fillable = ['judul_buku','penerbit_buku','genre_buku','harga_buku'];
}
