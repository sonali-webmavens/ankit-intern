<?php

namespace App\Http\Controllers;

use App\Models\Compny;

use App\Models\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','verified']);

    }

    public function index(Request $request)
    {
        $compnis = Compny::all();

        $employ = Employee::all();


        // //aa cod seach mate no chhe
        // $search = $request->search;

        // $employ = Employee::where(function($query) use ($search){
        //     $query->where('fist_name', 'like', "%$search%")
        //           ->orWhere('last_name', 'like', "%$search%");
        // })
        // ->get();
        

        return view('admin.index', compact('compnis','employ'));
    }
}
