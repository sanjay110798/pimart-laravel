<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('adminstyle/assets/img/apple-icon.png')}}" />
    <link rel="icon" type="image/png" href="{{asset('adminstyle/assets/img/favicon.png')}}" />
    <title>Pimart-Dashboard</title>
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />
    <!--  Social tags      -->
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('adminstyle/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('adminstyle/assets/css/material-dashboard.css')}}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('adminstyle/assets/css/demo.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="{{asset('adminstyle/assets/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('adminstyle/assets/css/google-roboto-300-700.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('adminasset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{asset('adminasset/plugins/toastr/toastr.min.css')}}">
</head>

<body>
    <div class="wrapper">
    @include('layouts.admin.dashboard.partial.sidebar')
    <div class="main-panel">
    @include('layouts.admin.dashboard.partial.header')

    @yield('content')
    @include('layouts.admin.dashboard.partial.footer')
    </div>
    </div>
    <!-- content -->
     @include('layouts.admin.dashboard.partial.fixed')
</body>
<!--   Core JS Files   -->
<script src="{{asset('adminstyle/assets/js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('adminstyle/assets/js/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('adminstyle/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('adminstyle/assets/js/material.min.js')}}" type="text/javascript"></script>
<script src="{{asset('adminstyle/assets/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="{{asset('adminstyle/assets/js/jquery.validate.min.js')}}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{asset('adminstyle/assets/js/moment.min.js')}}"></script>
<!--  Charts Plugin -->
<script src="{{asset('adminstyle/assets/js/chartist.min.js')}}"></script>
<!--  Plugin for the Wizard -->
<script src="{{asset('adminstyle/assets/js/jquery.bootstrap-wizard.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('adminstyle/assets/js/bootstrap-notify.js')}}"></script>
<!--   Sharrre Library    -->
<script src="{{asset('adminstyle/assets/js/jquery.sharrre.js')}}"></script>
<!-- DateTimePicker Plugin -->
<script src="{{asset('adminstyle/assets/js/bootstrap-datetimepicker.js')}}"></script>
<!-- Vector Map plugin -->
<script src="{{asset('adminstyle/assets/js/jquery-jvectormap.js')}}"></script>
<!-- Sliders Plugin -->
<script src="{{asset('adminstyle/assets/js/nouislider.min.js')}}"></script>

<script src="{{asset('adminstyle/assets/js/jquery.select-bootstrap.js')}}"></script>
<!--  DataTables.net Plugin    -->
<script src="{{asset('adminstyle/assets/js/jquery.datatables.js')}}"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{asset('adminstyle/assets/js/sweetalert2.js')}}"></script>
<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('adminstyle/assets/js/jasny-bootstrap.min.js')}}"></script>
<!--  Full Calendar Plugin    -->
<script src="{{asset('adminstyle/assets/js/fullcalendar.min.js')}}"></script>
<!-- TagsInput Plugin -->
<script src="{{asset('adminstyle/assets/js/jquery.tagsinput.js')}}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('adminstyle/assets/js/material-dashboard.js')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('adminstyle/assets/js/demo.js')}}"></script>
<script src="{{asset('adminasset/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('adminasset/plugins/toastr/toastr.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
</script>
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
<script>
        $('.statuschange').on('click',function(){
        var id = $(this).data('id');
        $.ajax({
        url:'{{route("status.change")}}',
        type:'get',
        data:{id:id,_token: '{{csrf_token()}}'},

        success: function(data){
        location.reload();
        }

        });
        });
        $("#country").on('change', function(){
        // alert("hi");
        var cntry = $("#country").val(); 

            $.ajax({
            url:'{{route("get.state")}}',
            type:'post',
            data:{country:cntry,_token: '{{csrf_token()}}'},
            
            success: function(data){
              $('#state').html(data);
            }
     
          });
        

    });

   ////////////////
  $("#state").on('change', function(){
        // alert("hi");
        var state = $("#state").val(); 

            $.ajax({
            url:'{{route("get.city")}}',
            type:'post',
            data:{state:state,_token: '{{csrf_token()}}'},
            
            success: function(data){
              $('#city').html(data);
            }
     
          });
        

    });
</script>
<script>
    $('.v-color-picker__color').on('click',function(e){
         
          var bgcolor= $(this).find('div').css('background-color');
         
          $('.mobile_header').css('background-color', bgcolor);
      $('#app_color').val(bgcolor);
    });

</script>   
</html>

