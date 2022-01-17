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
                   <a href="/review" style="float:right;" class="btn btn-secondary">Back</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="/review" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="customer_name">Customer Name</label>
                    <input type="text" class="form-control @error('customer_name') is-invalid @enderror" id="customer_name" name="customer_name" value="{{old('customer_name')}}">
                  </div>
                  @error('customer_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="textarea">Description</label>
                    <textarea style="resize:none;" placeholder="Enter description" name="customer_description" class="form-control @error('customer_description') is-invalid @enderror" id="textarea" rows="3">
                    {{ old('description') }}
                    </textarea>
                  </div>
                  @error('customer_description')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Customer Image</label>
                    <input class="form-control @error('customer_image') is-invalid @enderror" type="file" id="formFile" name="customer_image">
                  </div>
                  @error('customer_image')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
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