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
        $vehicle_id_int = intval( $request->vehicle_id );
        $vehicle = PopularVehicle::findOrFail($vehicle_id_int);
        
        if ($vehicle_id_int != $vehicle->id) {
            return redirect()->action([HomeController::class, 'show'],['id'=>$vehicle->id])->with('orderFail','Your Order is Failed !');
        } else {
            $data = $request->validated();
            $data['vehicle_id'] = $vehicle_id_int;
            $imageName = date('YmdHis') . " . " . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/orderIdentity'), $imageName);
            $data['image'] = $imageName;
            $data['brand'] = $request->brand;
            $data['model'] = $request->model;
            Order::create($data);
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
        return redirect()->route('admin.order')->with('finished', 'Order is successfully finished');
    }

}
