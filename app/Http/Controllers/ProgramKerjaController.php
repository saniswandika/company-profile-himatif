<?php

namespace App\Http\Controllers;

use App\Models\program_kerja;
use Illuminate\Http\Request;
use DB;
class ProgramKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $jumlahanggota  = program_kerja::select(
            DB::raw("(COUNT(nama_program)) as jumlahanggota"),
            DB::raw("YEAR(estimasi_jalan_program) as year")
        )->orderBy('estimasi_jalan_program', 'DESC')->groupBy('year')->get();
        foreach($jumlahanggota as $value){
            $jmlh_program = $value->jumlahanggota;
        }
        $jumlahanggota  = program_kerja::select(
            DB::raw("(COUNT(nama_program)) as jumlahanggota"),
            DB::raw("YEAR(estimasi_jalan_program) as month")
        )->orderBy('estimasi_jalan_program', 'DESC')->groupBy('month')->get();
        foreach($jumlahanggota as $value){
            $jmlh_program_bln = $value->jumlahanggota;
        }

        $seluruh_kegiatan = DB::table('program_kerjas')->count();


        $records = program_kerja::orderby('created_at','desc')->paginate(5);
        return view('pages.program_kerja', compact('records','jmlh_program_bln','jmlh_program','seluruh_kegiatan'));
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
            'nama_program' => 'required',
            'estimasi_jalan_program' => 'required',
            'deskripsi_program' => 'required',
            'file_program' => 'required|mimes:jpeg,png,jpg,gif,svg|max:9999',
        ]);
        // dd($request);
        $input = $request->all();
  
        if ($image = $request->file('file_program')) {
            $destinationPath = 'file_program/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['file_program'] = "$profileImage";
        }
    
        program_kerja::create($input);
     
        return redirect()->back()->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\program_kerja  $program_kerja
     * @return \Illuminate\Http\Response
     */
    public function show(program_kerja $program_kerja, $id)
    {
        $tampil_halaman = program_kerja::find($id);
        $gambar = DB::table('galeris')
                ->where('kegiataan_kampus_id', '=', $id)
                ->get();
        $kegiatan = program_kerja::all();
        // dd($users);
        return view('pages.read_more_proker',compact('tampil_halaman','gambar','kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\program_kerja  $program_kerja
     * @return \Illuminate\Http\Response
     */
    public function edit(program_kerja $program_kerja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\program_kerja  $program_kerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_program' => 'required',
            'estimasi_jalan_program' => 'required',
            ]);
            if ($files = $request->file('file_program')) {
            $destinationPath = 'file_program/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $update['file_program'] = "$profileImage";
            }
            $update['nama_program'] = $request->get('nama_program');
            $update['deskripsi_program'] = $request->get('deskripsi_program');
            $update['estimasi_jalan_program'] = $request->get('estimasi_jalan_program');
            program_kerja::where('id',$id)->update($update);
        return redirect()->back()->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\program_kerja  $program_kerja
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        program_kerja::where('id',$id)->delete();
        return redirect()->back()->with('success','Product updated successfully');
    }
}
