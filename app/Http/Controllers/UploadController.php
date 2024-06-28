<?php

namespace App\Http\Controllers;

use App\Imports\CompnyImport;
use Illuminate\Http\Request;
use App\Jobs\ImportCompaniesJob;
use Maatwebsite\Excel\Facades\Excel;

class UploadController extends Controller
{
    public function index ()
    {
        return view('file_upload');
    }

    public function import(Request $request)
    {

        $request->validate([
            'file' => 'required|file|mimes:csv,txt',
        ]);


        // $filePath = $request->file('file')->store('imported-files');


        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $filePath = $file->storeAs('imported-files', $fileName);

        ImportCompaniesJob::dispatch($filePath);


        return redirect()->back()->with('success', 'File uploaded successfully and queued for import.');
    }




}
