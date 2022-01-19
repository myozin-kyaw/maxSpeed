<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerReview;
use App\Models\PopularVehicle;

class HomeController extends Controller
{
    public function index()
    {
        $vehicles = PopularVehicle::orderBy('created_at', 'desc')->limit(3)->get();
        $features_one = PopularVehicle::orderBy('created_at', 'desc')->get();
        $features_two = PopularVehicle::orderBy('created_at', 'asc')->get();
        $reviews = CustomerReview::orderBy('created_at', 'desc')->get();
        return view('welcome', compact('vehicles','features_one','features_two','reviews'));
    }

    public function show($id)
    {
        $vehicle = PopularVehicle::findOrFail($id);
        return view('vehicle_show', compact('vehicle'));
    }

    public function review_show($id)
    {
        $review = CustomerReview::findOrFail($id);
        return view('review_show', compact('review'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        if ($search === null) {
            return redirect('/');
        } else {
            $items = PopularVehicle::where('brand','like','%'.$search.'%')->get();
            return view('search',compact('items'));
        }
    }

}
