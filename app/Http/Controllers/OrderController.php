<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\PopularVehicle;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function submit(OrderRequest $request)
    {
        $vehicle_id = $request->vehicle_id;
        $vehicle = PopularVehicle::findOrFail($vehicle_id);
        
        if ($vehicle_id != $vehicle->id) {
            return redirect()->action([HomeController::class, 'show'],['id'=>$vehicle->id])->with('orderFail','Your Order is Failed !');
        } else {
            $order = new Order();
            $order->name = $request->name;
            $order->email = $request->email;
            $order->phone = $request->phone;
            $order->address = $request->address;
            
            $imageName = date('YmdHis') . " . " . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/orderIdentity'), $imageName);
            $order->image = $imageName;

            $order->brand = $vehicle->brand;
            $order->model = $vehicle->model;
            $order->vehicle_id = $vehicle->id;
            $order->save();
            return redirect()->action([HomeController::class, 'show'],['id'=>$vehicle->id])->with('orderPass','Your Order is successfully submitted, We will contact you as soon as possible !');
        }
    
    }

    public function order()
    {
        $orders = Order::all();
        return view('admin.order', compact('orders'));
    }

    public function order_finish($id)
    {
        $order = Order::findOrFail($id)->delete();
        return redirect('/order')->with('finished', 'Order is successfully finished');
    }

}
