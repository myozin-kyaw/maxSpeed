<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerReview;
use App\Http\Requests\reviewEditRequest;
use App\Http\Requests\CustomerReviewCreateRequest;

class CustomerReviewsController extends Controller
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
        $reviews = CustomerReview::all();
        return view('admin.review', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.review_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerReviewCreateRequest $request)
    {
        $review = new CustomerReview();
        $review->customer_name = $request->customer_name;
        $review->customer_description = $request->customer_description;
        
        $imageName = date('YmdHis') . " . " . request()->customer_image->getClientOriginalExtension();
        request()->customer_image->move(public_path('images/customerImage'), $imageName);
        $review->customer_image = $imageName;

        $review->save();
        return redirect('/review')->with('uploaded', config('upload.message.created'));
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
    public function edit(CustomerReview $review)
    {
        return view('admin.review_edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(reviewEditRequest $request, CustomerReview $review)
    {
        $review->customer_name = $request->customer_name;
        $review->customer_description = $request->customer_description;
        
        if($request->customer_image) {
            $imageName = date('YmdHis') . " . " . request()->customer_image->getClientOriginalExtension();
            request()->customer_image->move(public_path('images/customerImage'), $imageName);
            $review->customer_image = $imageName;
        }

        $review->save();
        return redirect('/review')->with('uploaded', config('upload.message.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerReview $review)
    {
        $review->delete();
        return redirect('/review')->with('deleted', config('upload.message.deleted'));
    }
}