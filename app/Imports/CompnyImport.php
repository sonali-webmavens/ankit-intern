<?php

namespace App\Imports;

use App\Models\temp_company;
use App\Models\UploadFile;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class CompnyImport implements ToModel, WithCustomCsvSettings
{
    public function model(array $row)
    {
        return new temp_company([
            'id' => $row[0],
            'name' => $row[1],
            'address' => $row[2],
            'contact_no' => $row[3],
        ]);
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => "|"
        ];
    }



}
