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
        $features = PopularVehicle::orderBy('created_at', 'desc')->get();
        $reviews = CustomerReview::orderBy('created_at', 'desc')->get();
        return view('welcome', compact('vehicles','features','reviews'));
    }

    public function show($id)
    {
        $vehicle = PopularVehicle::findOrFail($id);
        return view('vehicle_show', compact('vehicle'));
    }

    public function view($id)
    {
        $featured = PopularVehicle::findOrFail($id);
        return view('featured_view', compact('featured'));
    }

    public function review_show($id)
    {
        $review = CustomerReview::findOrFail($id);
        return view('review_show', compact('review'));
    }

}
