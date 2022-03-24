<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\PopularVehicle;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id_int = intval( $request->user_id );
        if (Auth::id() == $user_id_int) {
            $data = $request->all();
            $vehicle_id_int = intval( $request->vehicle_id );
            $price_int = intval( $request->price );
            $data['user_id'] = $user_id_int;
            $data['vehicle_id'] = $vehicle_id_int;
            $data['price'] = $price_int;
            Cart::create($data);
            return redirect('/')->with('message', 'successfully added to the cart');
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::findOrFail($id)->delete();
        return redirect('/')->with('message', 'successfully removed to the cart');
    }
}
