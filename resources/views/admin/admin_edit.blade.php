@extends('layouts.master')

@section('content')
<style type="text/css">
    #pass-close, #pass-open {
        cursor: pointer;
        position: absolute;
        top:2.5em;
        right:1em;
    }
    #pass-open {
        display:none;
    }
</style>
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
                <form action="{{ route('admin.update', [$admin->id]) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                      <label for="brand">Name</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $admin->name) }}">
                  </div>
                  @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $admin->email) }}">
                  </div>
                  @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group position-relative">
                      <label for="password">Password</label>
                      <input type="password" id="pass" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password', $admin->password) }}">
                      <span id="pass-open"><i class="far fa-eye"></i></span>
                      <span id="pass-close"><i class="far fa-eye-slash"></i></span>
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
  <script>
    const pass_open = document.getElementById('pass-open');
    const pass_close = document.getElementById('pass-close');
    pass_close.addEventListener('click',function() {
        document.getElementById('pass').setAttribute('type', 'text');
        pass_close.style.display = 'none';
        pass_open.style.display = 'block';
    })  
    pass_open.addEventListener('click',function() {
        document.getElementById('pass').setAttribute('type', 'password');
        pass_open.style.display = 'none';
        pass_close.style.display = 'block';
    })    

  </script>

@endsection