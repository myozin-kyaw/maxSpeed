<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\PopularVehicle;
use App\Http\Requests\vehicleEditRequest;
use App\Http\Requests\VehicleCreateRequest;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $vehicles = PopularVehicle::orderBy('id', 'desc')->get();
        return view('admin.vehicle', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.vehicle_create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleCreateRequest $request)
    {
        $vehicle = new PopularVehicle();
        $vehicle->brand = $request->brand;
        $vehicle->model = $request->model;
        $vehicle->price = $request->price;
        $vehicle->production_year = $request->production_year;
        $vehicle->speed = $request->speed;
        
        $imageName = date('YmdHis') . " . " . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/vehicles'), $imageName);
        $vehicle->image = $imageName;

        $vehicle->transmission_id = $request->transmission_id;
        $vehicle->power_id = $request->power_id;
        $vehicle->save();
        return redirect('/vehicle')->with('uploaded', config('upload.message.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PopularVehicle $vehicle)
    {
        $categories = Category::all();
        return view('admin.vehicle_edit', compact('vehicle','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(vehicleEditRequest $request,PopularVehicle $vehicle)
    {
        $vehicle->brand = $request->brand;
        $vehicle->model = $request->model;
        $vehicle->price = $request->price;
        $vehicle->production_year = $request->production_year;
        $vehicle->speed = $request->speed;
        
        if($request->image) {
            $imageName = date('YmdHis') . " . " . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/vehicles'), $imageName);
            $vehicle->image = $imageName;
        }

        $vehicle->transmission_id = $request->transmission_id;
        $vehicle->power_id = $request->power_id;
        $vehicle->save();
        return redirect('/vehicle')->with('uploaded', config('upload.message.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PopularVehicle $vehicle)
    {
        $vehicle->delete();
        return redirect('/vehicle')->with('deleted', config('upload.message.deleted'));
    }
}