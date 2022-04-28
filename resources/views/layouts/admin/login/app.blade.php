<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pimart Admin | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminasset/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('adminasset/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminasset/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminasset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{asset('adminasset/plugins/toastr/toastr.min.css')}}">
</head>
<body class="hold-transition login-page" style="background-image: url({{asset('adminstyle/login.jpg')}});background-position: center;">
@yield('content')
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('adminasset/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminasset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminasset/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('adminasset/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('adminasset/plugins/toastr/toastr.min.js')}}"></script>
</body>
</html>
@if(Session::has('success'))
<script>
toastr.success("{{Session::get('success')}}")
</script>
@endif
@if(Session::has('error'))
<script>
toastr.error("{{Session::get('error')}}")
</script>
@endif
@if(Session::has('warning'))
<script>
toastr.warning("{{Session::get('warning')}}")
</script>
@endif