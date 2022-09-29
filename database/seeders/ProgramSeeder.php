<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('program_kerjas')->insert([
            'nama_program' => 'Mips',
            'estimasi_jalan_program' => now(),
            'deskripsi_program' => 'Mips',
            'file_program' => 'himatif.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
