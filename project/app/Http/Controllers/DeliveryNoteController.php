<?php

namespace App\Http\Controllers;

use App\DeliveryNote;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DeliveryNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DeliveryNote::all();
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
        $storeId = $request->input("storeId");
        $status = $request->input("status");
        $extra = $request->input("extra");
        $productId = $request->input("productId");
        $amount = $request->input("amount");

        // for ke

        DeliveryNote::Create([
            'storeId' => $storeId,
            'status' =>  $status,
            'extra' => $extra,
            'productId' => $productId,
            'amount' => $amount,
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
        return DB::table('deliveryNotes')->where('storeId', $id)->get();
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
        DB::table('deliveryNotes')->where('id', $id);
    }
}
