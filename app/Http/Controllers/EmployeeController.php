<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Department;
use App\Models\Employee;
use App\Models\EmployeeTypes;
use App\Models\User;
use App\Notifications\Employee\SendEmployeeCredencialsNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $employee_types = EmployeeTypes::all();
        $departments = Department::all();
        return view('employee.index',compact('employees','employee_types','departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $employee_types = EmployeeTypes::all();
        return view('employee.create',compact('employee_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Create a new User Account
        $randomPassword = Str::random(10);;
        $userData = [
            'name' => $request->name. " " . $request->surname,
            'avatar' => '/uploads/images/user_default.png',
            'email' => $request->email,
            'password' => bcrypt($randomPassword)
        ];
        $newUser = User::create($userData);
        //User on Client Role
        $newUser->assignRole('operator');

        $employee = Employee::create(
            $request->only(['name','surname', 'document_type', 'document_name', 'email','nationality', 'telefone', 'gender','country', 'employee_type_id','user_id', 'department_id']));
        $employee->user_id = $newUser->id;
        $employee->save();


        $address = new Address();
        $address->province          =   $request->province;
        $address->district          =   $request->district;
        $address->neighborhood      =   $request->neighborhood;
        $address->street            =   $request->street;
        $address->avenue            =   $request->avenue;
        $address->block             =   $request->block;
        $address->place_number      =   $request->place_number;
        $address->employee_id       =  $employee->id;
        $address->save();


        //Notificar o utilizador que sua conta foi registada
        $newUser->notify(new SendEmployeeCredencialsNotification($employee, $request->email, $randomPassword));


        return redirect()->to('/employees')->with(['message' => 'Funcionario adicionado com sucesso']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {

        $employees = Employee::all();
        $employee_types = EmployeeTypes::all();
        $departments = Department::all();
        return view('employee.edit',compact('employee','employee_types','departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->name = $request->name;
        $employee->surname = $request->surname;
        $employee->telefone = $request->telefone;
        $employee->nationality = $request->nationality;

        $employee->save();

        return redirect()->to('/employees')->with(['message' => 'Funcionario atualizado com sucesso']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->to('/employees')->with(['message' => 'Funcionario apagado com sucesso']);
    }
}
