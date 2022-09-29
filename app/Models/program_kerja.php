<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class program_kerja extends Model
{
    use HasFactory;
    protected $table="program_kerjas";
    protected $fillable = [
        'nama_program',
        'estimasi_jalan_program',
        'deskripsi_program', 
        'file_program',
       ];
}
