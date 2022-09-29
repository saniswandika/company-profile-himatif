<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('kegiataan_kampuses')->insert([
            'nama_kegiatan' => 'Mips',
            'estimasi_jalan_kegiatan' => now(),
            'deskripsi_kegiatan' => 'Mips',
            'file_kegiatan' => 'himatif.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
