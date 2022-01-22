@extends('layouts.main')

@section('content')

    <div class="card" style="max-width: 540px;margin:5em auto 0;">
        <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ url('/images/customerImage/' . $review->customer_image) }}" class="img-fluid rounded-start" alt="{{ $review->customer_name }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $review->customer_name }}</h5>
                        <p class="card-text">{{ $review->customer_description }}</p>
                        <p class="card-text"><small class="text-muted">Review since : {{ $review->created_at }}</small></p>
                    </div>
                </div>
        </div>
    </div>

@endsection
        
