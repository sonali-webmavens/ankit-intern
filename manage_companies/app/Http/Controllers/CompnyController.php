<?php

namespace App\Http\Controllers;

use App\Models\Compny;
use App\Models\Employ;
use Illuminate\Http\Request;

class CompnyController extends Controller
{
    public function index()
    {
        $comp = Compny::all();
        return view('comp.index', compact('comp'));
    }

    public function create()
    {
        return view('comp.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $kujbi = new Compny();

        $kujbi->name = $request->input('name');
        $kujbi->email = $request->input('email');
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $ankit = $image->getClientOriginalExtension();
            $image_name = time() . "." . $ankit;
            $image->move('ankit_img/imagepath', $image_name);

            $kujbi->logo = $image_name;
        }

        $kujbi->save();


        return redirect()->route('compony.index');
    }

    public function edit(string $id)
    {
        $edit_comp = Compny::findOrFail($id);
 

        return view('comp.edit', compact('edit_comp'));
    }

    public function update(Request $request_comp, $id)
    {
        $update_comp = Compny::find($id);
        $update_comp->name = $request_comp->input('name');
        $update_comp->email = $request_comp->input('email');

        if ($request_comp->hasFile('logo')) {
            $image = $request_comp->file('logo');
            $ankit = $image->getClientOriginalExtension();
            $image_name = time() . "." . $ankit;
            $image->move('ankit_img/imagepath', $image_name);

            $update_comp->logo = $image_name;
        }

        $update_comp->save();
        return redirect()->route('compony.index');
    }

    public function destroy($id)
    {
        Compny::destroy($id);
        return back();
    }
}
