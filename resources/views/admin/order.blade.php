@extends('layouts.master')

@section('content')

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    <h3>Order DataTable</h3>
                </div>
              </div>
              @if (session('finished'))
                <div class="alert alert-success alert-dismissible fade show mx-4" role="alert">
                <strong>Success!</strong> {{ session('finished') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
              <!-- /.card-header -->
              <div class="card-body">
                @forelse($orders as $order)
                <div class="card mb-3" style="max-width: 900px;">
                  <div class="row g-0">
                    <div class="col-md-6">
                      <img style="width: 400px;height: auto;;" src="{{ url('/images/orderIdentity/' . $order->image) }}">
                    </div>
                    <div class="col-md-6">
                      <div class="card-body">
                        <h5 class="card-title">Brand & Model : {{ $order->brand }} | {{ $order->model }}</h5>
                        <p class="card-text">Customer name : {{ $order->name }}</p>
                        <p class="card-text">Email : {{ $order->email }}</p>
                        <p class="card-text">Phone : {{ $order->phone }}</p>
                        <p class="card-text">Address : {{ $order->address }}</p>
                        <p class="card-text"><small class="text-muted">Order at : {{ $order->created_at }}</small></p>
                        <div class="card-body" style="display:flex;gap:10px;">
                          <form action="{{ route('admin.order_finish', [$order->id]) }}" method="GET">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-warning" type="submit">Finish</button>
                          </form>
                          <form action="{{ route('admin.order_finish', [$order->id]) }}" method="GET">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Cancel</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @empty

                  <h3 class="my-5 text-center">Not result yet ... </h3>

                @endforelse
                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection

<!-- <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Brand | Model</th>
                        <th>Identity Card</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                  <tbody>
                  
                  @foreach($orders as $order)
                  <tr>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->brand }} | {{ $order->model }}</td>
                    <td><a href="" class="btn btn-success">View image</a></td>
                    <td>
                        <div class="form-row">
                            <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-warning">Finish</button>
                            </form>
                        </div>
                    </td>
                  </tr>
                  @endforeach
                  
                </table> -->