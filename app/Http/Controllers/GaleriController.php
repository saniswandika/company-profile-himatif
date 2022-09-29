<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use App\Models\kegiataan_kampus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = galeri::orderby('created_at','desc')->get();
        $jml_gambar = DB::table('galeris')->count();
        $kegiatan = kegiataan_kampus::all();
        // dd($records);
        return view('pages.galeri', compact('records','kegiatan','jml_gambar'));
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
            'nama_gambar' => 'required',
            'deskripsi_gambar' => 'required',
            'kegiataan_kampus_id' => 'required',
            'file_gambar' => 'required|mimes:jpeg,png,jpg,gif,svg|max:9999',
        ]);
        // dd($request);
        $input = $request->all();
  
        if ($image = $request->file('file_gambar')) {
            $destinationPath = 'file_gambar/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['file_gambar'] = "$profileImage";
        }
    
        galeri::create($input);
     
        return redirect()->back()->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(galeri $galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_gambar' => 'required',
            'deskripsi_gambar' => 'required',
            ]);
            $update = ['nama_gambar' => $request->nama_gambar, 'deskripsi_gambar' => $request->deskripsi_gambar];
            if ($files = $request->file('file_gambar')) {
                    $destinationPath = 'file_gambar/'; // upload path
                    $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                    $files->move($destinationPath, $profileImage);
                    $update['file_gambar'] = "$profileImage";
            }
            $update['nama_gambar'] = $request->get('nama_gambar');
            $update['kegiataan_kampus_id'] = $request->get('kegiataan_kampus_id');
            $update['deskripsi_gambar'] = $request->get('deskripsi_gambar');
            galeri::where('id',$id)->update($update);
        return redirect()->back()->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        galeri::where('id',$id)->delete();
        return redirect()->back()->with('success','Product updated successfully');
    }
}
