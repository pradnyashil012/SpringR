<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employees::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'email' => 'required|email|unique:employees,email, $employee->id',
            'fullname' => 'required|string|max:255',
            'doj' => 'required',
            'dol' => 'sometimes|nullable',
            'image' => 'required|image',
        ]);

        

        $employee = Employees::create([
            'email' => $request->email,
            'fullname' => $request->fullname,
            'doj' => $request->doj,
            'dol' => $request->dol,
            'image' => 'image.jpg',
        ]);

        if($request->has('image'))
        {
            $image = $request->image;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/employees', $image_new_name);
            $employee->image = '/storage/employees/' . $image_new_name;
        }

        $employee->save();

        Session::flash('success', 'Employee created successfully!');
        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employees  $Employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employees $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employees  $Employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employees $employee)
    {
       
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employees  $Employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employees $employee)
    {
        $request->validate([
            'email' => 'required|email',
            'fullname' => 'required|string|max:255',
            'doj' => 'required',
            'dol' => 'sometimes|nullable',
        ]);

        $employee->email = $request->email;
        $employee->fullname = $request->fullname;
        $employee->doj = $request->doj;
        $employee->dol = $request->dol;

        if($request->hasFile('image'))
        {
            $image = $request->image;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/employees', $image_new_name);
            $Employee->image = '/storage/employees/' . $image_new_name;
        }

        $employee->save();

        Session::flash('success', 'Employee updated successfully!');

        return redirect()->route('employees.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employees  $Employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employees $employee)
    {
        $employee->delete();
        return back();
    }
}
