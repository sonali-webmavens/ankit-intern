<?php

namespace App\Livewire\Employee;

use App\Models\Employee;
use Livewire\Component;

class EmployeeComponent extends Component
{
    public $employees;

    public $editEmployeeId;
    public $editPhone;

    protected $rules = [
        'editPhone' => 'required|numeric', // Define validation rules as per your application's needs
    ];

    public function mount()
    {
        $this->employees = Employee::all();
    }
    public function render()
    {
        $employees = Employee::get();

        return view('livewire.employee.employee-component', ['employees'=>$employees])->layout('livewire.layouts.base');
    }
    public function edit($id)
    {
        $this->editEmployeeId = $id;
        $employee = Employee::findOrFail($id);
        $this->editPhone = $employee->phone;
    }

    public function update($id)
    {
        $this->validate();

        $employee = Employee::findOrFail($id);
        $employee->phone = $this->editPhone;
        $employee->save();

        $this->editEmployeeId = null; // Reset edit mode
        return redirect()->route('allEmployee');
    }


}
