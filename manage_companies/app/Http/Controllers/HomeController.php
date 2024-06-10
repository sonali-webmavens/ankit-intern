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

    public function index()
    {
        $compnis = Compny::all();

        $employ = Employee::all();

        return view('index', compact('compnis','employ'));
    }
}
