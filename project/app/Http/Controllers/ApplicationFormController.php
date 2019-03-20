<?php

namespace App\Http\Controllers;

use App\ApplicationForm;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ApplicationFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ApplicationForm::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeId = $request->input("storeId");
        $status = $request->input("status");
        $reason = $request->input("reason");
        $extra = $request->input("extra");
        $productId = $request->input("productId");
        $amount = $request->input("amount");
        $employeeId = $request->input("employeeId");
        
        //for ke?

        ApplicationForm::Create([
            'storeId' => $storeId,
            'status' =>  $status,
            'reason' =>  $reason,
            'extra' => $extra,
            'status' => "In aanvraag",
            'productId' => $productId,
            'amount' => $amount,
            'employeeId' => $employeeId,
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
        return DB::table('applicationForms')->where('storeId', $id)->get();
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
