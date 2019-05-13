<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // public $successStatus = 200;
    // /** 
    //      * login api 
    //      * 
    //      * @return \Illuminate\Http\Response 
    //      */ 
    //     public function login(){ 
    //         if(Auth::attempt(['username' => request('username'), 'password' => request('password')])){ 
    //             $user = Auth::user(); 
    //             return response()->json(['success' => $success], $this-> successStatus); 
    //         } 
    //         else{ 
    //             return response()->json(['error'=>'Unauthorised'], 401); 
    //         } 
    //     }
    //     public function logout(){ 
    //     }

    // /** 
    //      * details api 
    //      * 
    //      * @return \Illuminate\Http\Response 
    //      */ 
    //     public function details() 
    //     { 
    //         $user = Auth::user(); 
    //         return response()->json(['success' => $user], $this-> successStatus); 
    //     } 
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Employee::all();
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Employee::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
