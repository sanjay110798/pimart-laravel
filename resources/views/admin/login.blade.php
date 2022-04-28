@extends('layouts.admin.login.app')

@section('content')
<div class="login-box position-relative">
  <div class="login-logo" style="background: linear-gradient(60deg, #ec407a, #d81b60);
   padding: 17px 4px 17px 4px;
    position: absolute;
    top: -52px;
    z-index: 11;
    margin: 4px 18px 6px 18px;
    width: 90%;">
    <a href="" style="color: #fff;"><b>PIMART</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card" style="    padding: 41px 0 0 0;">
    <div class="card-body login-card-body">
      
      <form action="{{route('admin.checklogin')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    
      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
    
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
@endsection