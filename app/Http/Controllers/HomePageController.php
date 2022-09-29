<?php

namespace App\Http\Controllers;
use App\Models\kegiataan_kampus;
use App\Models\program_kerja;
use App\Models\data_anggota;
use App\Models\partnership;
use App\Models\galeri;
use Illuminate\Http\Request;
use DB;

class HomePageController extends Controller
{
    public function index()
    {
        $posting_kegiatan = kegiataan_kampus::all();
        $posting_partnership = partnership::all();
        $posting_galeri = galeri::all();
        $posting_proker = program_kerja::all();
        $posting_DP = DB::table('data_anggotas')
                ->where('jabatan', 'ketua dewan pengurus')
                ->get();
            // foreach($posting_DP as $value){
            //         $posting_ketua = $value->posting_DP;
            //     }
                // dd($posting_DP);
        $posting_bendahara = DB::table('data_anggotas')
                ->where('jabatan', 'bendahara')
                ->get();
        $posting_sekretaris = DB::table('data_anggotas')
                ->where('jabatan', 'sekretaris')
                ->get();
        $posting_divisi = DB::table('data_anggotas')
                ->where('jabatan', 'dewan pengurus')
                ->get();
        $users = data_anggota::select(DB::raw("(count(nama_anggota)) as total_click"), DB::raw("year(angkatan) as year"))
                ->where('angkatan', '>=', '2014-12-9')
                ->orderBy('angkatan', 'DESC')
                ->groupBy('year')
                ->pluck('total_click', 'year');
                $labels = $users->keys();
                $data = $users->values();
       
         return view('home' , compact('posting_kegiatan',
                                    'posting_galeri',
                                    'posting_partnership',
                                    'posting_proker',
                                    'posting_DP',
                                    'posting_bendahara',
                                    'posting_sekretaris',
                                    'posting_divisi',
                                    'labels',
                                    'data',
                    ));
    }
}
