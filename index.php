<?php
namespace App\Exports;
use App\Models\DataPengirimanPaket;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
class UsersImport implements ToModel
{
    
    
    public function startRow(): int
    {
        return 2;
    }
    
    public function model(array $row){
        
        return new DataPengirimanPaket([
            'id' => NULL,
            'id_user' => $row[1],
            'origin_id' => $row[2],
            'pengirim_id' => $row[3],
            'penerima_id' => $row[4],
            'penerimas' => $row[5],
            'tgl_kirim' => $row[6],
            'nomor_resi' => $row[7],
            'panjang' => $row[8],
            'lebar' => $row[9],
            'tinggi' => $row[10],
            'berat' => $row[11],
            'jumlah' => $row[12],
            'cod' => $row[13],
            'biaya_cod' => $row[14],
            'kategori_barang' => $row[15],
            'total_biaya' => $row[16],
            'keterangan' => $row[17],
            'service' => $row[18],
            'status' => $row[19],
            'created_at' => $row[20],
            'updated_at' => $row[21],
            
        ]);
    }
}































<?php

namespace App\Exports;

use App\Models\DataPengirimanPaket;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class resiExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataPengirimanPaket::all();
    }
    
    
    public function headings(): array
    {
        return [
            'SL',
            'id_user',
            'origin_id',
            'pengirim_id',
            'penerima_id',
            'penerima_id',
            'penerimas',
            'tgl_kirim',
            'nomor_resi',
            'panjang',
            'lebar',
            'tinggi',
            'berat',
            'jumlah',
            'cod',
            'biaya_cod',
            'kategori_barang',
            'total_biaya',
            'keterangan',
            'service',
            'status',
            'created_at',
            'updated_at',
            
        ];
    }
    
}
