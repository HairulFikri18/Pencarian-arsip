<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_Arsip extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategori() {
        return $this->belongsTo(Kategori_Arsip::class, 'id_kategori');
    }
    public function ruangan() {
        return $this->belongsTo(Ruangan::class, 'id_ruangans');
    }
    public function lemari() {
        return $this->belongsTo(Lemari::class, 'id_lemari');
    }
    public function rak() {
        return $this->belongsTo(Rak::class, 'id_rak');
    }
    public function box() {
        return $this->belongsTo(Box::class, 'id_box');
    }
}
