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
                  <h2 class="card-title"><b>Vehicle Edit Panel</b></h2>
                </div>
                <div class="ms-auto p-2 bd-highlight">
                   <a href="{{route('vehicle.index')}}" style="float:right;" class="btn btn-secondary">Back</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('vehicle.update',[$vehicle->id])}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                      <label for="brand">Brand</label>
                      <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" name="brand" value="{{old('brand', $vehicle->brand)}}">
                  </div>
                  @error('brand')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                      <label for="model">Model</label>
                      <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model" value="{{old('model', $vehicle->model)}}">
                  </div>
                  @error('model')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                      <label for="price">Price</label>
                      <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price', $vehicle->price)}}">
                  </div>
                  @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                      <label for="year">Production Year</label>
                      <input type="text" class="form-control @error('production_year') is-invalid @enderror" id="year" name="production_year" value="{{old('production_year', $vehicle->production_year)}}">
                  </div>
                  @error('production_year')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                      <label for="speed">Speed</label>
                      <input type="text" class="form-control @error('speed') is-invalid @enderror" id="speed" name="speed" value="{{old('speed', $vehicle->speed)}}">
                  </div>
                  @error('speed')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                      <label for="">Transmission</label>
                      <select name="transmission_id" class="form-control @error('transmission_id') is-invalid @enderror">
                          <option value="">Select Transmission</option>
                          @foreach($categories as $category)
                          <option value="{{$category->id}}" {{$category->id === $vehicle->transmission_id ? 'selected' : ''}}>{{$category->transmission_name}}</option>
                          @endforeach
                      </select>
                  </div>
                  @error('transmission_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                      <label for="">Power</label>
                      <select name="power_id" class="form-control @error('power_id') is-invalid @enderror">
                          <option value="">Select Power</option>
                          @foreach($categories as $category)
                          <option value="{{$category->id}}" {{$category->id === $vehicle->power_id ? 'selected' : ''}}>{{$category->power_name}}</option>
                          @endforeach
                      </select>
                  </div>
                  @error('power_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="mb-4">
                    <div class="container">
                      <div class="row">
                        <div class="col-8">
                          <label for="formFile" class="form-label">Vehicle Image</label>
                          <input style="width:30em" class="form-control" type="file" id="formFile" name="image">
                        </div>
                        <div class="col-4 mt-2">
                          <img style="width:10em; height:auto; float:right;" src="{{url('/images/vehicles/' . $vehicle->image)}}">
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