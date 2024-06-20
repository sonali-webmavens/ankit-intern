<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Compny;
use App\Models\Employee;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EmployController extends Controller
{
    public function index()
    {
        $show_comp = Compny::all();
        $show_employ = Employee::all();
        return view('emp.index', compact('show_employ','show_comp'));
    }
    public function create()
    {
        $compny_create = Compny::all();
        return view('emp.create', compact('compny_create'));
    }

    public function data_table(Request $request)
    {
        if($request->ajax())
        {
            $employee = Employee::with('company')->get();
            // $employee = Employee::all();

            return DataTables::of($employee)
            ->addIndexColumn()
            ->addColumn('company_name',function($row){
                return $row->company->name;
            })
            ->addColumn('action', function($row){
                $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm"> View </a>';
                return $btn;

            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('datatable.table');
    }



    public function store(StoreEmployeeRequest $request)
    {
        $comp = Employee::create([
            'fist_name' => $request->fist_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company_id' => $request->company_id,
        ]);

        $comp->save();



        return redirect()->route('employ.index');
    }

    public function edit(string $id)
    {
        $edit_emp = Employee::findOrFail($id);
        $edit_conp = Compny::all();

        //findOrFail thi koy path ma id no change ny thay sake...

        return view('emp.edit', compact('edit_emp', 'edit_conp'));
    }

    public function update(Request $request, string $id)
    {
        $product_data = Employee::findOrFail($id);
        $product_data->update([
            'fist_name' => $request->fist_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company_id' => $request->company_id,


        ]);
        return redirect()->route('employ.index');
    }

    public function destroy(string $id)
    {
        Employee::destroy($id);
        return back();
    }








}
