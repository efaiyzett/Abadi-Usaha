<?php

namespace App\Exports;

use App\Models\Pesanan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Collection;

class LaporanExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $semua = Pesanan::all();
        $data = $semua->groupBy(function ($item) {
            return $item->created_at->format('F'); 
        })->map(function ($group) {
            return [
                'bulan' => $group->first()->created_at->format('F'),
                'pendapatan' => $group->sum('harga'),
            ];
        })->values();

        return new Collection($data);
    }

    public function headings(): array
    {
        return ['Bulan', 'Pendapatan'];
    }
    
}
