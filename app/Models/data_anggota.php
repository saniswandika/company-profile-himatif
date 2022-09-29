<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_anggota extends Model
{
    use HasFactory;
    protected $table = "data_anggotas";
    protected $fillable = [
        'nama_anggota',
        'angkatan',
        'jenis_keanggotaan', 
        'alamat_anggota',
        'gambar',
        'Jabatan',
       ];
        public function jabatan()
        {
        //return $this->belongsToMany(RelatedModel, pivot_table_name, foreign_key_of_current_model_in_pivot_table, foreign_key_of_other_model_in_pivot_table);
        return $this->belongsToMany(
                struktur_organisasi::class,
                'anggota_jabatan',
                'data_anggota_id'
            );
        }

       public function nama()
       {
           # code...
           return $this->hasMany(struktur_organisasi::class);
       }
}
