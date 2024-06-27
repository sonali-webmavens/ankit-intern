<?php

namespace App\Exports;

use App\Models\NewCompny;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;


class CompanyExportWithCsv implements FromCollection, WithCustomCsvSettings
{
    public function collection()
    {
        return NewCompny::all();
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => '|',
        ];
    }
}
