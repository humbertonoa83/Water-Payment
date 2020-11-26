<?php

namespace App\Http\Controllers;

use App\Models\EmployeeTypes;
use Illuminate\Http\Request;
use DB;
class EmployeeTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(request()->ajax())
        {
            if(!empty($request->from_date))
            {
                $data = DB::table('complaints_types')
                    ->whereBetween('created_at', array($request->from_date, $request->to_date))
                    ->get();
            }
            else
            {
                $data = DB::table('complaints_types')
                    ->get();
            }
            return datatables()->of($data)->make(true);
        }
        $employee_types = EmployeeTypes::all();
        return view('employee-type.index',compact('employee_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $employee_type = EmployeeTypes::create($request->only(['name', 'description']));
        $employee_type->save();

        return redirect()->to('/employee')->with(['message' => 'Tipo de funcionário adicionado com sucesso']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeTypes  $employeeTypes
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeTypes $employeeTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeTypes  $employeeTypes
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeTypes $employeeTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeeTypes  $employeeTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeTypes $employeeTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeTypes  $employeeTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeTypes $employeeTypes)
    {
        //
    }
}
