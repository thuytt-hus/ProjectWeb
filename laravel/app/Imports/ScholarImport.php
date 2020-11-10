<?php

namespace App\Imports;

use App\Model\Admin\ScholarModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ScholarImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new ScholarModel([
            'referralunit' => $row['referralunit'],
            'firstname' => $row['firstname'],
            'lastname' => $row['lastname'],
            'position' => $row['position'],
            'faculty' => $row['faculty'],
            'college' => $row['college'],
            'country' => $row['country'],
            'email' => $row['email'],
            'phone' => $row['phone']
        ]);
    }
}
