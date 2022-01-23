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
        if (Auth::check()) {
            $vehicle = PopularVehicle::findOrFail($request->input('vehicle_id'));
            $cart = new Cart();
            $cart->brand = $vehicle->brand;
            $cart->model = $vehicle->model;
            $cart->price = $vehicle->price;
            $cart->image = $vehicle->image;
            $cart->vehicle_id = $vehicle->id;
            $cart->user_id = $request->input('user_id');
            $cart->save();
            return redirect('/')->with('message', 'successfully added to the cart');
        } else {
            return redirect('login');
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
        $cart = Cart::findOrFail($id)->delete();
        return redirect('/')->with('message', 'successfully removed to the cart');
    }
}
