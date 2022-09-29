<?php

namespace App\Http\Controllers;

use App\Models\partnership;
use Illuminate\Http\Request;
use DB;
class PartnershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = partnership::orderby('created_at','desc')->paginate(5);
        $jml = partnership::count();
        return view('pages.partnership', compact('records','jml'));
        // return view('pages.partnership');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'jenis kerjasama' => 'required',
            'mulai_kerjasama' => 'required',
            'ex_kerjasama' => 'required',
            'logo_perusahaan' => 'required|mimes:jpeg,png,jpg,gif,svg|max:9999',
        ]);
        // dd($request);
        $input = $request->all();
  
        if ($image = $request->file('logo_perusahaan')) {
            $destinationPath = 'logo_perusahaan/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['logo_perusahaan'] = "$profileImage";
        }
    
        partnership::create($input);
     
        return redirect()->back()->with('success','Product created successfully.');
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
            'nama_perusahaan' => 'required',
            'jenis_kerjasama' => 'required',
            'mulai_kerjasama' => 'required',
            'ex_kerjasama' => 'required',
            'logo_perusahaan' => 'required|mimes:jpeg,png,jpg,gif,svg|max:9999',
        ]);
        // dd($request);
        $input = $request->all();
  
        if ($image = $request->file('logo_perusahaan')) {
            $destinationPath = 'logo_perusahaan/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['logo_perusahaan'] = "$profileImage";
        }
    
        partnership::create($input);
     
        return redirect()->back()->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\partnership  $partnership
     * @return \Illuminate\Http\Response
     */
    public function show(partnership $partnership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\partnership  $partnership
     * @return \Illuminate\Http\Response
     */
    public function edit(partnership $partnership)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\partnership  $partnership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'mulai_kerjasama' => 'required',
            'ex_kerjasama' => 'required',
            'jenis_kerjasama' => 'required',
            ]);
            $update = ['nama_perusahaan' => $request->nama_perusahaan, 'jenis_kerjasama' => $request->jenis_kerjasama];
            if ($files = $request->file('logo_perusahaan')) {
            $destinationPath = 'logo_perusahaan/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $update['logo_perusahaan'] = "$profileImage";
            }
            $update['nama_perusahaan'] = $request->get('nama_perusahaan');
            $update['mulai_kerjasama'] = $request->get('mulai_kerjasama');
            $update['ex_kerjasama'] = $request->get('ex_kerjasama');
            $update['jenis_kerjasama'] = $request->get('jenis_kerjasama');
            partnership::where('id',$id)->update($update);
        return redirect()->back()->with('success','Product updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\partnership  $partnership
     * @return \Illuminate\Http\Response
     */
    public function destroy(partnership $partnership, $id)
    {
        partnership::where('id',$id)->delete();
        return redirect()->back()->with('success','Product updated successfully');
    }
}
