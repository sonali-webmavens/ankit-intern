<?php

namespace App\Exports;

use App\Models\NewCompny;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class CompanyExport implements FromCollection, WithCustomCsvSettings
{
    public function collection()
    {
        return NewCompny::all();
    }

    public function fileName()
    {
        return 'company_' . now()->format('Y-m-d-H-i-s') . '.xlsx';
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => '|',
        ];
    }
}
