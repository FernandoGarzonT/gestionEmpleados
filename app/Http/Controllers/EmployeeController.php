<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $employees= Employee::paginate(8);

        return view('livewire.employee', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Employee $employee)
    {
        $departments = Department::all();
        return view('livewire.create-employee', compact('employee', 'departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request): RedirectResponse
    {

        $employee = new Employee();
        $employee->nombres = $request->nombres;
        $employee->apellidos = $request->apellidos;
        $employee->cedula = $request->cedula;
        $employee->email = $request->email;
        $employee->numeroCelular = $request->numeroCelular;
        $employee->fechaContratacion = $request->fechaContratacion;
        $employee->department_id = $request->department_id;
        $employee->save();

        return redirect()->route('dashboard')->with('success', 'Employee Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee): View
    {
        return view('employees.employees', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee): View
    {
        return view('livewire.edit-employee', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request, Employee $employee): RedirectResponse
    {
        $employee->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Employee Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee): RedirectResponse
    {
        $employee->delete();
        return redirect()->route('dashboard');
    }
}
