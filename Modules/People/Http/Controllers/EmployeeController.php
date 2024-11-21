<?php

namespace Modules\People\Http\Controllers;

use Modules\People\DataTables\EmployeesDataTable;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Modules\People\Entities\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(EmployeesDataTable $dataTable)
    {
        abort_if(Gate::denies('access_employee'), 403);
        // dd($dataTable);
        return $dataTable->render('people::employees.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_if(Gate::denies('create_employees'), 403);

        return view('people::employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        abort_if(Gate::denies('create_customers'), 403);

        $request->validate([
            'employees_name'  => 'required|string|max:255',
            // 'customer_phone' => 'required|max:255',
            // 'customer_email' => 'required|email|max:255',
            // 'city'           => 'required|string|max:255',
            // 'country'        => 'required|string|max:255',
            // 'address'        => 'required|string|max:500',
        ]);

        Employee::create([
            'employees_name'  => $request->employees_name,
            'employees_phone' => $request->employees_phone,
            'employees_email' => $request->employees_email,
            'city'           => $request->city,
            'country'        => $request->country,
            'address'        => $request->address,
            'jobdesk'    => $request->jobdesk
        ]);

        toast('Emplyee Created!', 'success');

        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        abort_if(Gate::denies('edit_employees'), 403);

        return view('people::employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        abort_if(Gate::denies('update_employees'), 403);

        $request->validate([
            'employees_name'  => 'required|string|max:255',
            'employees_email' => 'required|email|max:255',
            'employees_phone' => 'required|max:255',
            'city'           => 'required|string|max:255',
            'country'        => 'required|string|max:255',
            'address'        => 'required|string|max:500',
        ]);

        $employee->update([
            'employees_name'  => $request->employees_name,
            'employees_email' => $request->employees_email,
            'employees_phone' => $request->employees_phone,
            'city'           => $request->city,
            'country'        => $request->country,
            'address'        => $request->address,
            'jobdesk'        => $request->jobdesk
        ]);

        toast('Employee Updated!', 'info');

        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
