<?php

namespace App\Http\Controllers;
use App\Models\Compny;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Scopes\compnyScope;

class CompnyController extends Controller
{
    public function index()
    {
        $comp = Compny::all();
        $companyCount = (new compnyScope())->count(Compny::query());
        return view('comp.index', compact('comp', 'companyCount'));
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
        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];
        Mail::send('mails.mail', $data, Function($massage){
            $massage->to('ankit@wemavens.com', 'company name 2')->subject('joining comp');
            $massage->from('ankit@webmavens.com', 'company name');
        });

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


        return redirect()->route('compony.index')->with('success','mail sent');
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
        $compny = Compny::findOrFail($id);
        $compny->delete();
        return back();
    }

    public function trashed()
    {
        $onlyTrashed = Compny::onlyTrashed()->get();
        $onlyTrashedCount = (new compnyScope())->countOnlyTrashed(Compny::query());
        return view('comp.trashed', compact('onlyTrashed', 'onlyTrashedCount'));
    }

    public function forceDelete($id)
    {
        $company = Compny::withTrashed()->findOrFail($id);
        $company->forceDelete();
        return redirect()->route('compony.trashed')->with('success', 'Company deleted permanently.');
    }
}
