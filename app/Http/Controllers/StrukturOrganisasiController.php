<?php

namespace App\Http\Controllers;

use App\Models\struktur_organisasi;
use App\Models\data_anggota;
use Illuminate\Http\Request;
use DB;

class StrukturOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $users = DB::table('data_anggotas')->get();
        foreach($users as $value){
            $jabatan = $value;
        }
       
        
        $jabatan = struktur_organisasi::all();
        $pengurus = data_anggota::where('jabatan', '<>', null)->get();
        foreach($pengurus as $value){
            $user = $value->jabatan;
        }
        $jmlh_pengurus = DB::table('data_anggotas')
                ->where('jabatan', $user)
                ->count();
                
        $periode = struktur_organisasi::where('id', 1)->value('periode');
        // dd($periode);
        return view('pages.Struktur-Organisasi', compact('pengurus','jmlh_pengurus','user','jabatan','periode')); 
    }

    /**
 * Show the form  creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $records = DB::table('data_anggotas')->select(DB::raw('*'))->whereRaw('Date(created_at) = CURDATE()')->get();
        // return view('pages.partnership', compact('records'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\struktur_organisasi  $struktur_organisasi
     * @return \Illuminate\Http\Response
     */
    public function show(struktur_organisasi $struktur_organisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\struktur_organisasi  $struktur_organisasi
     * @return \Illuminate\Http\Response
     */
    public function edit(struktur_organisasi $struktur_organisasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\struktur_organisasi  $struktur_organisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jabatan = data_anggota::find($id);
        $jabatan->Jabatan= $request->input('Jabatan');
     //    dd($jabatan);
     
        $jabatan->update();
        return redirect()->back()->with('success','anggota berhasil masuk struktur organisasi successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\struktur_organisasi  $struktur_organisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $jabatan = data_anggota::where('jabatan', '<>', null)->get()->all();
        foreach($jabatan as $value){
            $user = $value->jabatan;
        }
        DB::table('data_anggotas')->where('jabatan', $user)->onDelete('set null');
        return redirect()->back()->with('success','anggota berhasil masuk struktur organisasi successfully');
 
    }
}