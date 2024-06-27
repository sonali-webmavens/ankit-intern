<?php

namespace App\Exports;

use App\Models\NewCompny;
use Maatwebsite\Excel\Concerns\FromCollection;


class CompanyExportWithExcel implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NewCompny::all();
    }

    public function fileName()
    {
        return 'company_' . now()->format('Y-m-d-H-i-s') . '.xlsx';
    }

}
