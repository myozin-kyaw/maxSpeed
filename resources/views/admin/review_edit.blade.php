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
                  <h2 class="card-title"><b>Review Create Panel</b></h2>
                </div>
                <div class="ms-auto p-2 bd-highlight">
                   <a href="{{ route('review.index') }}" style="float:right;" class="btn btn-secondary">Back</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('review.update', [$review->id]) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                    <label for="customer_name">Customer Name</label>
                    <input type="text" class="form-control @error('customer_name') is-invalid @enderror" id="customer_name" name="customer_name" value="{{ old('customer_name', $review->customer_name) }}">
                  </div>
                  @error('customer_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="textarea">Description</label>
                    <textarea style="resize:none;" placeholder="Enter description" name="customer_description" class="form-control @error('customer_description') is-invalid @enderror" id="textarea" rows="3">
                    {{ old('customer_description', $review->customer_description) }}
                    </textarea>
                  </div>
                  @error('customer_description')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="mb-4">
                    <div class="container">
                      <div class="row">
                        <div class="col-8">
                          <label for="formFile" class="form-label">Customer Image</label>
                          <input style="width:30em" class="form-control" type="file" id="formFile" name="customer_image">
                        </div>
                        <div class="col-4 mt-2">
                          <img style="width:5em; height:auto; float:right;" src="{{ url('/images/customerImage/' . $review->customer_image) }}">
                        </div>
                      </div>
                    </div>
                  </div>
                  <button style="float:right;" type="submit" class="btn btn-primary">Submit</button>
                </form>
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