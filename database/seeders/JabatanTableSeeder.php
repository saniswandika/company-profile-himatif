<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class JabatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('struktur_organisasis')->insert([
        //     'jabatan' => 'ketua dewan pengurus',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        DB::table('struktur_organisasis')->insert([
            'jabatan' => 'bendahara',
            'Periode' => '2020/2021',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('struktur_organisasis')->insert([
            'jabatan' => 'sekretaris',
            'Periode' => '2020/2021',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('struktur_organisasis')->insert([
            'jabatan' => 'divisi',
            'Periode' => '2020/2021',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
