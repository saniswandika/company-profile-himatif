<?php

namespace App\Http\Controllers;

use App\Models\data_anggota;
use App\Models\struktur_organisasi;
use Illuminate\Http\Request;
use App\Imports\data_anggotaImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\anggotaExport;
use DB;
use DataTables;
class DataAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function json(){
        return Datatables::of(data_anggota::all())->make(true);
    }
    public function index()
    {
        $records = data_anggota::orderby('created_at','desc')->get();
        $jabatan = struktur_organisasi::all();
            
        $jumlahanggota  = DB::table('data_anggotas')->count();
        $jmlh_anggota_aktif = DB::table('data_anggotas')
                ->where('jenis_keanggotaan', 'aktif')
                ->count();
        $jmlh_anggota_kehormatan = DB::table('data_anggotas')
                ->where('jenis_keanggotaan', 'kehormatan')
                ->count();
        $jmlh_anggota_perintis = DB::table('data_anggotas')
                ->where('jenis_keanggotaan', 'perintis')
                ->count();
        return view('pages.Data-Anggota', compact('records','jabatan','jumlahanggota','jmlh_anggota_aktif','jmlh_anggota_perintis','jmlh_anggota_kehormatan'));   
    }

    /**
     * Show the form for creating a new resource.
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
         $request->validate([
            'nama_anggota' => 'required',
            'angkatan' => 'required',
            'jenis_keanggotaan' => 'required',
            'alamat_anggota' => 'required',
            'gambar' => 'required|mimes:jpeg,png,jpg,gif,svg|max:9999',
        ]);
        $input = $request->all();
        if ($image = $request->file('gambar')) {
            $destinationPath = 'profil-anggota/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }
        // dd($input);
        $save = data_anggota::create($input);
     
        return redirect()->back()->with('success','Product created successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\data_anggota  $data_anggota
     * @return \Illuminate\Http\Response
     */
    public function show(data_anggota $data_anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\data_anggota  $data_anggota
     * @return \Illuminate\Http\Response
     */
    public function edit(data_anggota $data_anggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\data_anggota  $data_anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_anggota' => 'required',
            'angkatan' => 'required',
            'jenis_keanggotaan' => 'required',
            'alamat_anggota' => 'required',
        ]);
            if ($image = $request->file('gambar')) {
                $destinationPath = 'profil-anggota/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $update['gambar'] = "$profileImage";
            }
            $update['nama_anggota'] = $request->get('nama_anggota');
            $update['angkatan'] = $request->get('angkatan');
            $update['jenis_keanggotaan'] = $request->get('jenis_keanggotaan');
            $update['alamat_anggota'] = $request->get('alamat_anggota');
            data_anggota::where('id',$id)->update($update);
        return redirect()->back()->with('success','anggota updated successfully');
    }
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\data_anggota  $data_anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        data_anggota::where('id',$id)->delete();
        return redirect()->back()->with('success','Product updated successfully');
    }
    public function importExcelCSV(Request $request) 
    {
        $validatedData = $request->validate([
 
           'file' => 'required',
 
        ]);
 
        Excel::import(new data_anggotaImport,$request->file('file'));
        return redirect()->back()->with('status', 'Data Anggota Berhasil Bi Tambah Kan Dari Excel ');
    }
    
        public function exportExcelCSV($slug) 
    {
        return Excel::download(new anggotaExport, 'data_anggotas.'.$slug);
    }
    public function tambahjabatan(Request $request, $id)
    {
       $jabatan = data_anggota::find($id);
       $jabatan->Jabatan= $request->input('Jabatan');
    //    dd($jabatan);
       $jabatan->update();
       return redirect()->back()->with('success','anggota berhasil masuk struktur organisasi successfully');
    }
}
