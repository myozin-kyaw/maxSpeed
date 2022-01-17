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
                  <h2 class="card-title"><b>Category Create Panel</b></h2>
                </div>
                <div class="ms-auto p-2 bd-highlight">
                   <a href="/category" style="float:right;" class="btn btn-secondary">Back</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="/category" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="transmission_name">Transmission name</label>
                    <input type="text" class="form-control @error('transmission_name') is-invalid @enderror" id="transmission_name" name="transmission_name" value="{{old('transmission_name')}}">
                  </div>
                  @error('transmission_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="power_name">Power name</label>
                    <input type="text" class="form-control @error('power_name') is-invalid @enderror" id="power_name" name="power_name" value="{{old('power_name')}}">
                  </div>
                  @error('power_name')
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