<?php

namespace App\Imports;

use App\Models\data_anggota;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class data_anggotaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new data_anggota($row);
        
        // return new data_anggota([
        // 'namaanggota' => $row['nama_anggota'],
        // 'angkatan' => Carbon::parse($row['angkatan'])->toDateTimeString(),
        // 'jenis keanggotaan'=> $row['jenis_keanggotaan'], 
        // 'alamat_anggota'=> $row['alamat'],
        // 'Timestamp'=>$row['Timestamp'],
        // ]);
    }
    public function headings(): array
    {
        return [
            'nama anggota',
            'angkatan',
            'jenis keanggotaan',
            'alamat_anggota',
            'Timestamp',
        ];
    }
    public function rules(): array
    {
        return [
            'angkatan'=>'required|date_format:d-m-Y',
            //..
        ];
    }
}
