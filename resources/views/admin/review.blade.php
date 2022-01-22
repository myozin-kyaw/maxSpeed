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
                    <h3>Reviews DataTable</h3>
                </div>
                <div class="ms-auto p-2 bd-highlight">
                    <a href="{{ route('review.create') }}" style="float:right;" class="btn btn-success">Create</a>
                </div>
              </div>
              @if (session('uploaded'))
                <div class="alert alert-success alert-dismissible fade show mx-4" role="alert">
                <strong>Success!</strong> {{ session('uploaded') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
              @if (session('deleted'))
              <div class="alert alert-danger alert-dismissible fade show mx-4" role="alert">
              <strong>Success!</strong> {{ session('deleted') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="width:7em;">Customer name</th>
                        <th style="width:22em;">Description</th>
                        <th>image</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                  <tbody>
                  @foreach($reviews as $review)
                  <tr>
                      <td>{{ $review->customer_name }}</td>
                      <td>{{ $review->customer_description }}</td>
                      <td><img style="width:5em; height:auto;" src="{{ url('/images/customerImage/' . $review->customer_image) }}"></td>
                      <td>
                        <div class="form-row">
                            <a style="height:40px; margin-right:10px;" href="{{ route('review.edit', [$review->id]) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('review.destroy', [$review->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                      </td>
                  </tr>
                  @endforeach
                </table>
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