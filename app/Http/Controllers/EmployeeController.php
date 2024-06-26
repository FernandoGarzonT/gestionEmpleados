<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Mail\EmployeeCreateMailable;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
    public function create(Employee $Employee)
    {
        $departments = Department::all();
        return view('livewire.create-employee', compact('Employee', 'departments'));
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

        Mail::to('testemail@email.com')->send(new EmployeeCreateMailable($employee));

        return redirect()->route('dashboard')->with('success', 'Employee Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $Employee): View
    {
        return view('employees.employees', compact('Employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $Employee): View
    {
        return view('livewire.edit-employee', compact('Employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request, Employee $Employee): RedirectResponse
    {
        $employee->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Employee Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $Employee): RedirectResponse
    {
        $Employee->delete();
        return redirect()->route('dashboard');
    }
}
