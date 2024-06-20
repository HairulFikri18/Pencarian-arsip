<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function tabelArsip() {
        return $this->hasOne(Tabel_Arsip::class, 'id_ruangan');
    }
}
