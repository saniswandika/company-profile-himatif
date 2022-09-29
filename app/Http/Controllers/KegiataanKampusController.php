<?php

namespace App\Http\Controllers;

use App\Models\kegiataan_kampus;
use Illuminate\Http\Request;
use DB;
class KegiataanKampusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlahanggota  = kegiataan_kampus::select(
            DB::raw("(COUNT(nama_kegiatan)) as jumlahanggota"),
            DB::raw("YEAR(estimasi_jalan_kegiatan) as year")
        )->orderBy('estimasi_jalan_kegiatan', 'DESC')->groupBy('year')->get();
        foreach($jumlahanggota as $value){
            $jmlh_kegiatan = $value->jumlahanggota;
        }
        $jumlahanggota  = kegiataan_kampus::select(
            DB::raw("(COUNT(nama_kegiatan)) as jumlahanggota"),
            DB::raw("YEAR(estimasi_jalan_kegiatan) as month")
        )->orderBy('estimasi_jalan_kegiatan', 'DESC')->groupBy('month')->get();
        foreach($jumlahanggota as $value){
            $jmlh_kegiatan_bln = $value->jumlahanggota;
        }
        $seluruh_kegiatan = DB::table('kegiataan_kampuses')->count();

        $records = kegiataan_kampus::orderby('created_at','desc')->paginate(5);
        return view('pages.kegiatan-kampus', compact('records','jmlh_kegiatan','jmlh_kegiatan_bln','seluruh_kegiatan'));
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
        // dd($request);
        $request->validate([
            'nama_kegiatan' => 'required',
            'estimasi_jalan_kegiatan' => 'required',
            'deskripsi_kegiatan' => 'required',
            'file_kegiatan' => 'required|mimes:jpeg,png,jpg,gif,svg|max:9999',
        ]);
        // dd($request);
        $input = $request->all();
  
        if ($image = $request->file('file_kegiatan')) {
            $destinationPath = 'file_kegiatan/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['file_kegiatan'] = "$profileImage";
        }
    
        kegiataan_kampus::create($input);
     
        return redirect()->back()->with('success','Product created successfully.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kegiataan_kampus  $kegiataan_kampus
     * @return \Illuminate\Http\Response
     */
    public function show(kegiataan_kampus $kegiataan_kampus , $id)
    {
        $tampil_halaman = kegiataan_kampus::find($id);
        $gambar = DB::table('galeris')
                ->where('kegiataan_kampus_id', '=', $id)
                ->get();
        $kegiatan = kegiataan_kampus::all();
        // dd($users);
        return view('pages.contoh',compact('tampil_halaman','gambar','kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kegiataan_kampus  $kegiataan_kampus
     * @return \Illuminate\Http\Response
     */
    public function edit(kegiataan_kampus $kegiataan_kampus)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kegiataan_kampus  $kegiataan_kampus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'deskripsi_kegiatan' => 'required',
            ]);
            $update = ['nama_kegiatan' => $request->nama_kegiatan, 'deskripsi_kegiatan' => $request->deskripsi_kegiatan];
            if ($files = $request->file('file_kegiatan')) {
            $destinationPath = 'file_kegiatan/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $update['file_kegiatan'] = "$profileImage";
            }
            $update['nama_kegiatan'] = $request->get('nama_kegiatan');
            $update['deskripsi_kegiatan'] = $request->get('deskripsi_kegiatan');
            $update['estimasi_jalan_kegiatan'] = $request->get('estimasi_jalan_kegiatan');
            kegiataan_kampus::where('id',$id)->update($update);
        return redirect()->back()->with('success','Product updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kegiataan_kampus  $kegiataan_kampus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    kegiataan_kampus::where('id',$id)->delete();
    return redirect()->back()->with('success','Product updated successfully');
    }
}
