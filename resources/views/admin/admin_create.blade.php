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
                  <h2 class="card-title"><b>Admin Create Panel</b></h2>
                </div>
                <div class="ms-auto p-2 bd-highlight">
                   <a href="{{ route('admin.index') }}" style="float:right;" class="btn btn-secondary">Back</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('admin.store' )}}" method="POST">
                  @csrf
                  <div class="form-group">
                      <label for="brand">Name</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                  </div>
                  @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                  </div>
                  @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
                  </div>
                  @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                      <label for="is_admin">Is Admin ?</label>
                      <select name="is_admin" class="form-control @error('is_admin') is-invalid @enderror">
                          <option value="">Select Is Admin ?</option>
                          <option value="1" selected>Admin</option>
                      </select>
                  </div>
                  @error('is_admin')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <button style="float:right;" type="submit" class="btn btn-primary">Register</button>
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