<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Model\Admin\PartnerModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PartnerImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PartnerModel([
            'referralunit' => $row['referralunit'],
            'firstname' => $row['firstname'],
            'lastname' => $row['lastname'],
            'position' => $row['position'],
            'department' => $row['department'],
            'company_name' => $row['company_name'],
            'country' => $row['country'],
            'email' => $row['email'],
            'phone' => $row['phone']
        ]);
    }
}
