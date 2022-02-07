<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationContrller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation = Reservation::all();
        return response()->json($reservation,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation=Reservation::find($id);
        return response()->json($reservation);
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
        $reservation= Reservation::find($id);
        $reservation->first_name = $request->input('first_name');   
        $reservation->last_name = $request->input('last_name');
        $reservation->email = $request->input('email');
        $reservation->address = $request->input('address');
        $reservation->zip_code = $request->input('zip_code');
        $reservation->city = $request->input('city');
        $reservation->state = $request->input('state');
        $reservation->phone = $request->input('phone');
        $reservation->check_in_date = $request->input('check_in_date');
        $reservation->check_out_date = $request->input('check_out_date');
        
        $reservation->check_in_time = $request->input('check_in_time');
       
        $reservation->check_out_time = $request->input('check_out_time');
        $reservation->adult_number = $request->input('adult_number');
        $reservation->children_number = $request->input('children_number');
        $reservation->room = $request->input('room');
        $reservation->room_1 = $request->input('room_1');
        $reservation->room_2 = $request->input('room_2');
        $reservation->instructions = $request->input('instructions');
        $reservation->save();
        return response()->json(['msg'=>'Update success',200]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation=Reservation::find($id);
        return response()->json(['msg'=> 'Delete Success'],200);
    }
}
