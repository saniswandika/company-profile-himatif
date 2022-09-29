<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiataan_kampus extends Model
{
    use HasFactory;
    protected $table="kegiataan_kampuses";
    protected $fillable = [
        'nama_kegiatan',
        'estimasi_jalan_kegiatan',
        'deskripsi_kegiatan', 
        'file_kegiatan',
       ];

       public function galeris()
       {
           return $this->hasMany(galeri::class, 'kegiatan_id');
       }
}
