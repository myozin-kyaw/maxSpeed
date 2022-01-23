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
              <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach($orders as $order)
                <div class="col">
                  <div class="card" style="width: 18rem;">
                  <img style="border-bottom:1px solid #ccc;" src="{{ url('/images/orderIdentity/' . $order->image) }}">
                    <div class="card-body">
                      <h5 class="card-title">Order Brand & Model : {{ $order->brand }} | {{ $order->model }}</h5>
                      <p class="card-text">Order at : {{ $order->created_at }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Customer name : {{ $order->name }}</li>
                      <li class="list-group-item">Email : {{ $order->email }}</li>
                      <li class="list-group-item">Phone : {{ $order->phone }}</li>
                      <li class="list-group-item">Address : {{ $order->address }}</li>
                    </ul>
                    <div class="card-body">
                      <a href="#" class="btn btn-warning">Finish</a>
                      <a href="#" class="btn btn-danger">Cancel</a>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
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