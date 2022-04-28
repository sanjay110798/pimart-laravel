@extends('layouts.user.login.app')

@section('content')
  <section class="user_login">
    
    <div class="container">
      <div class="from_wrapper">
            <a class="logo" href="#">
              <img src="{{asset('userasset/images/logo-p.png')}}" alt="Logo">
            </a>
            <h4 class="from_title">Login From</h4> 
            <form action="{{route('checklogin')}}" method="post" class="login_from">
              @csrf
              <div class="form-group">
                <label>Email Id</label>
                <input type="email" class="form-control" placeholder="Email" name="email" required>
                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">

                <label class="form-check-label" for="remember">
                  Remember Me
                </label>
              </div>
              <button type="submit" class="btn btn-primary continue_btn">Login</button>
            
            
            </form>

          </div>
        </div>
      </div>  
    
  
    </div>
  
  
  </section>
  <!-- Banner Sec -->

@endsection