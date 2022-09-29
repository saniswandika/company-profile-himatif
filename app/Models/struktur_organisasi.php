<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class struktur_organisasi extends Model
{
    use HasFactory;
    protected $table = "struktur_organisasis";
    protected $fillable = [
        'jabatan',
        'periode',
    ];
       public function anggota()
       {
           return $this->belongsTo(data_anggota::class);
       }
       public function dataAnggota()
        {
        //return $this->belongsToMany(RelatedModel, pivot_table_name, foreign_key_of_current_model_in_pivot_table, foreign_key_of_other_model_in_pivot_table);
        return $this->belongsToMany(
                struktur_organisasi::class,
                'anggota_jabatan',
                'data_anggota_id',
                'struktur_organisasi_id');
        }
}
