<?php

namespace App\Exports;

use \App\Model\Admin\PartnerModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;


class PartnerExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return PartnerModel::all();
    }

    public function headings(): array
    {
        return [
            'STT',
            'Đơn vị giới thiệu',
            'Tên',
            "Họ đệm",
            "Chức vụ",
            "Lĩnh vực công tác",
            "Tên công ty",
            "Quốc gia",
            "Email",
            "Phone"

        ];
    }

    public function map($partner): array
    {
        return [
            $partner->id,
            $partner->referralunit,
            $partner->lastname,
            $partner->firstname,
            $partner->position,
            $partner->department,
            $partner->company_name,
            $partner->country,
            $partner->email,
            $partner->phone
        ];
    }


}
