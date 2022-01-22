@extends('layouts.main')

@section('content')

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
                            <form action="" method="POST">
                                @csrf
                                <button class="btn">Order</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        
@endsection