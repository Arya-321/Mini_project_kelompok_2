<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;
    protected $table = 'ulasan';
    protected $primaryKey = 'id_ulasan';
    protected $filelable = [
        'komentar','tgl_ulasan', 'id_pengunjung', 'id_tmpt_wisata'
    ];
    public function pengunjung(){
        return $this->belongsTo(Pengunjung::class);
    }
    public function tmpt_wisata(){
        return $this->belongsTo(Tmpt_wisata::class);
    }
}
