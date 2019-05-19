<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return Employee::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $storeId = $request->input('storeId'); 
        $name = $request->input('name');
        $age = $request->input('age');
        $duty = $request->input('duty');
        $username = $request->input('name');
        $password = $request->input('password');

        Employee::Create([
            'storeId' => $storeId,
            'name' => $name,
            'age' => $age,
            'duty' =>  $duty,
            'username' => $username . rand(1,50),
            'password' => $password,
            ]);
    }

    public function show($id)
    {
        return Employee::findOrFail($id);
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function login(Request $request) {

        $username = $request->input("username");
        $password = $request->input("password");

        if ($username != "" && $password != ""){
            $employee = Employee::where('username', '=', $username)->first();
            
            if ($employee->password == $password) {
                return response($employee->storeId, 200)
                ->header('Content-Type', 'text/plain');
            }
        }
        return response("0", 200)
        ->header('Content-Type', 'text/plain');
    }



    
    public function logout(Request $request)
    {
        return null;
    }
}
