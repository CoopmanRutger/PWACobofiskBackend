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
        //for ke?
        $applicationForm = new ApplicationForm;

        $applicationForm->storeId =  $request->input("storeId"),
        $applicationForm->status =  $request->input("status"),
        $applicationForm->reason =  $request->input("reason"),
        $applicationForm->extra = $request->input("extra"),
        $applicationForm->status = "In aanvraag",
        $applicationForm->productId = $request->input("productId"),
        $applicationForm->amount = $request->input("amount"),
        $applicationForm->employeeId = $request->input("employeeId"),

        $applicationForm->save();
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
