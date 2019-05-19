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
        echo $request;
        $storeId = $request->input("storeId");
        $status = "";
        $extra = "";
        $productId = $request->input("id");
        $amount = $request->input("amount");

        echo $amount;
        // $mytime = Carbon\Carbon::now();
        // echo $mytime;
        // echo $mytime->toDateTimeString();

        // DeliveryNote::Create([
        //     'storeId' => $storeId,
        //     'status' =>  $status,
        //     'extra' => $extra,
        //     'productId' => $productId,
        //     'amount' => $amount,
        //     'date' => randomDate(),
        //     ]);
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

    public function add(Request $request) {

        // echo $request;
        
        $deliveryNote = new DeliveryNote;

        $deliveryNote->storeId = $request->input("storeId");
        $deliveryNote->status = "proces";
        $deliveryNote->extra = $request->input("extra");
        $deliveryNote->productId = $request->input("id");
        $deliveryNote->amount = $request->input("amount");
        $deliveryNote->date = "";

        echo $deliveryNote;
        $deliveryNote->save();

        // return redirect('http://127.0.0.1:5500/orderforms.html');
    }


    private function randomDate() 
    {
        $YearDate = date('Y');
        $monthDate = date('m');
        $dayDate = date('d');
        $randomNumber = rand(1,13);

        if (($randomNumber + $dayDate) > 29){
            $dayDate = $randomNumber +$dayDate - 29;
            $monthDate ++;

            if ($monthDate < 10){
                $monthDate = '0' . $monthDate;
            }
        }else {
            $dayDate += $randomNumber;
        }

        if ($dayDate < 10){
            $dayDate = '0' . $dayDate;
        }
    
        return $YearDate . '-' . $monthDate . '-' . $dayDate;
    }
}
