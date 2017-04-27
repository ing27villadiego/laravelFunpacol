<?php

namespace App\Http\Controllers\Employee;

use App\City;
use App\Dokumenttyp;
use App\Employee;
use App\Http\Requests\Empleado\EmpleadoRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();

        return View('employee/index')
            ->with('employees', $employees);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dokumenttyps = Dokumenttyp::orderBy('name', 'ASC')->pluck('name','id');

        $cities = City::orderBy('name', 'ASC')->pluck('name','id');


        return View('employee/create')
            ->with('dokumenttyps',$dokumenttyps)
            ->with('cities', $cities);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpleadoRequest $request)
    {
        Employee::create($request->all());
        return redirect(url('employee'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);

        $dokumenttyps = Dokumenttyp::orderBy('name', 'DESC')->pluck('name','id');

        $cities = City::orderBy('name', 'DESC')->pluck('name','id');


        return view('employee.edit')
            ->with('cities', $cities)
            ->with('dokumenttyps', $dokumenttyps)
            ->with('employee',$employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmpleadoRequest $request, $id)
    {
        $employee = Employee::find($id);
        $employee->  fill($request->all());

        $employee->save();

        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
