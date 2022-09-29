<?php

namespace App\Http\Controllers;
use App\Models\data_anggota;
use DB;
use Carbon\CarbonPeriod;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // $data = data_anggota::all();
        // dd($data);
        // $users = data_anggota::select(DB::raw("COUNT(*) as count"), DB::raw("(DATE_FORMAT(created_at, '%Y')) as my_year"))
        // ->groupBy(DB::raw("Month(created_at)"))
        // ->pluck('count', 'month_name');

        // dd($users);

        $users = data_anggota::select(DB::raw("(count(nama_anggota)) as total_click"), DB::raw("year(angkatan) as year"))
        ->where('angkatan', '>=', '2014-12-9')
        ->orderBy('year', 'DESC')
        ->groupBy('year')
        ->pluck('total_click', 'year');
        $labels = $users->keys();
        $data = $users->values();
        
        // dd($labels);
        return view('dashboard', compact('labels','data'));
    }
}
