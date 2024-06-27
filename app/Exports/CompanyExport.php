<?php

namespace App\Exports;

use App\Models\NewCompny;
use Maatwebsite\Excel\Concerns\FromCollection;

class CompanyExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Id | Name | Address | Phone',
        ];
    }

    public function collection()
    {
        return NewCompny::all()->map(function ($company) {
            return [
                $company->id . ' | ' . $company->name . ' | ' . $company->address . ' | ' . $company->Contact_no,
            ];
        });
    }



    public function fileName()
    {
        return 'company_' . now()->format('Y-m-d-H-i-s') . '.xlsx';
    }

    // public function fileName()
    // {
    //     return 'company_' . now()->format('Y-m-d-H-i-s') . '.csv';
    // }
}
