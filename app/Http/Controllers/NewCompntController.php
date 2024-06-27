<?php

namespace App\Http\Controllers;

use App\Exports\CompanyExport;
use App\Models\NewCompny;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class NewCompntController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comp = NewCompny::all();
        return view('new_company.index', compact('comp'));
    }

    //aa function file download thaya pa6i aanu name defult hase ehh rese

    // public function exportExcel()
    // {
    //     return Excel::download(new CompanyExport, 'companies.xlsx');
    // }

    // public function exportCsv()
    // {
    //     return Excel::download(new CompanyExport, 'companies.csv', \Maatwebsite\Excel\Excel::CSV);
    // }


    //aa function ma fine name correct date and time thi save thase
    public function exportExcel()
    {
        return Excel::download(new CompanyExport, 'company_' . now()->format('Y-m-d-H-i-s') . '.xlsx');
    }

    // public function exportCsv()
    // {
    //     return Excel::download(new CompanyExport, 'company_' . now()->format('Y-m-d-H-i-s') . '.csv', \Maatwebsite\Excel\Excel::CSV);
    // }
    public function exportCsv()
{
    return Excel::download(new CompanyExport, 'company_' . now()->format('Y-m-d-H-i-s') . '.csv', \Maatwebsite\Excel\Excel::CSV);
}


}
