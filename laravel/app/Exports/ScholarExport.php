<?php

namespace App\Exports;

use App\Model\Admin\ScholarModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ScholarExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ScholarModel::all();
    }

    public function headings(): array
    {
        return [
            'STT',
            'Đơn vị giới thiệu',
            'Tên',
            "Họ đệm",
            "Chức vụ",
            "Khoa",
            "Đơn vị giáo dục",
            "Quốc gia",
            "Email",
            "Phone"

        ];
    }

    public function map($scholar): array
    {
        return [
            $scholar->id,
            $scholar->referralunit,
            $scholar->lastname,
            $scholar->firstname,
            $scholar->position,
            $scholar->faculty,
            $scholar->college,
            $scholar->country,
            $scholar->email,
            $scholar->phone
        ];
    }
}
