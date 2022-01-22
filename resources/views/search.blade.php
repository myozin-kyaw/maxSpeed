@extends('layouts.main')

@section('content')

    <h2 class="text-center py-5">Your Search Item ...</h2>

    <div class="row row-cols-1 row-cols-md-2 g-4">

        @forelse($items as $item)

            <div class="col">
                <div class="card" style="height: 28em;width: auto;">
                    <img style="height:18em;width: auto" src="{{ url('/images/vehicles/' . $item->image) }}" class="card-img-top" alt="{{ $item->brand | $item->model }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->brand }} | {{ $item->model }}</h5>
                        <p class="card-text">{{ $item->speed }}</p>
                        <div style="display:flex;gap:10px;">
                            <a href="{{url('vehicle_show', $item->id)}}" class="btn">More</a>
                            <form action="{{ route('cart.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                <input type="hidden" name="vehicle_id" value="{{ $item->id }}">
                                <input type="hidden" name="vehicle_brand" value="{{ $item->brand }}">
                                <input type="hidden" name="vehicle_model" value="{{ $item->model }}">
                                <input type="hidden" name="vehicle_price" value="{{ $item->price }}">
                                <input type="hidden" name="vehicle_image" value="{{ $item->image }}">
                                <button class="btn" type="submit">Add to cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        @empty

            <h3 class="my-5 text-center text-danger">Not found ... </h3>
            
        @endforelse

    </div>

@endsection