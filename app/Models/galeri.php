<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    use HasFactory;
    protected $table="galeris";
    protected $fillable = [
        'nama_gambar',
        'deskripsi_gambar',
        'file_gambar', 
        'kegiataan_kampus_id', 

       ];

    public function kegiatan()
    {
        return $this->belongsTo(kegiataan_kampus::class);
    }
}
