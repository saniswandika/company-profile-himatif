<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\SiswaImport;
use Maatwebsite\Excel\Facades\Excel;

class anggotacontroller extends Controller
{
    public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_siswa',$nama_file);
 
		// import data
		Excel::import(new data_anggota, public_path('file_data_anggota/'));
 
		// notifikasi dengan session
		Session::flash('sukses','Data anggota Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/');
	}
}
