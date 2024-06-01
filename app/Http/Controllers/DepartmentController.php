<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentRequest;
use App\Models\Department;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $Department=Department::paginate(8);
        return view('livewire.department', compact('Department'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Department $Department): View
    {
        return view('livewire.create-department', compact('Department'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartmentRequest $request): RedirectResponse
    {
        $department = new Department();
        $department->nombreDepartamento = $request->nombreDepartamento;
        $department->nombrePuesto = $request->nombrePuesto;
        $department->descripcion = $request->descripcion;
        $department->save();

        return redirect()->route('dashboard')->with('success', 'Department Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $Department): View
    {
        return view('employees.department', compact('Department'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $Department): View
    {
        return view('livewire.edit-department', compact('Department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DepartmentRequest $request, Department $Department): RedirectResponse
    {
        $Department->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Department Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $Department): RedirectResponse
    {
        $Department->delete();
        return redirect()->route('dashboard');
    }
}
