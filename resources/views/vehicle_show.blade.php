<title> {{ $vehicle->brand }} | {{ $vehicle->model }}</title>
<style type="text/css">
    form {
        color: var(--dark-blue);
    }
    .order-From, #close-orderForm {
        display: none;
    }
    .order-From {
        max-width: 50em;
        margin: 0 auto;
        padding-bottom: 1em;
    }
</style>
@extends('layouts.main')

@section('content')

    <div class="mt-5">
        @if (session('orderPass'))
        <div class="alert alert-success alert-dismissible fade show mx-4" role="alert">
        <strong>Success!</strong> {{ session('orderPass') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (session('orderFail'))
        <div class="alert alert-danger alert-dismissible fade show mx-4" role="alert">
        <strong>Fail!</strong> {{ session('orderFail') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>

    <div style="display:flex;justify-content:space-between;margin-top:5em;">
        
        <div style="width: 50%;">
            <img style="width:80%;height:auto;margin-top:1.5em" src="{{ url('/images/vehicles/' . $vehicle->image) }}" alt="{{ $vehicle->brand }} | {{ $vehicle->model }}">
        </div>

        <div style="width: 50%;">

            <table id="example2" class="table table-bordered table-hover" style="width: 100%;">
                <tbody>
                    <tr>
                        <th>Brand</th>
                        <td id="brand">{{ $vehicle->brand }}</td>
                    </tr>
                    <tr>
                        <th>Model</th>
                        <td id="model">{{ $vehicle->model }}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td id="price">{{ $vehicle->price }}</td>
                    </tr>
                    <tr>
                        <th>Production Year</th>
                        <td>{{ $vehicle->production_year }}</td>
                    </tr><tr>
                        <th>Speed</th>
                        <td>{{ $vehicle->speed }}</td>
                    </tr>
                    <tr>
                        <th>Transmission Type</th>
                        <td>{{ $vehicle->transmission->transmission_name }}</td>
                    </tr>
                    <tr>
                        <th>Power Type</th>
                        <td>{{ $vehicle->power->power_name }}</td>
                    </tr>
                    <tr>
                        <th>-</th>
                        <td>
                            <div style="display:flex;gap:10px;">
                                @auth
                                    <button id="order" class="btn">Order</button>
                                    <button class="btn" id="close-orderForm">Close Form</button>
                                @else
                                    <button id="order" class="btn" disabled>Order</button>
                                    <button class="btn" id="close-orderForm" disabled>Close Form</button>
                                @endauth
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    
    @auth
    <div class="order-From" id="order-From">

        <h3 class="text-center mt-5 mb-3">Order Form</h3>

        <form action="{{ route('order.submit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ auth()->user()->name }}">
            </div>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ auth()->user()->email }}">
            </div>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group mb-3">
                <label for="phone">Mobile Phone</label>
                <input type="tel" pattern="[0-9]{2}-[0-9]{3}-[0-9]{3}-[0-9]{3}" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone">
                <small>Format : 01-123-456-789</small>
            </div>
            @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group mb-3">
                <label for="address">Full Address</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address">
            </div>
            @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group mb-3">
                <label for="formFile" class="form-label">Identity card</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="formFile" name="image">
            </div>
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="hidden" name="brand" value="{{ $vehicle->brand }}">
            <input type="hidden" name="model" value="{{ $vehicle->model }}">

            <button style="float:right;" type="submit" class="btn mb-3">Submit</button>
            
        </form>

    </div>
    @else
        <h4 class="text-center mt-5">You need to login here to continue order, please <a style="color:var(--main-color);text-decoration:underline;" href="{{ route('login') }}">login</a></h4>
    @endauth
        
@endsection
