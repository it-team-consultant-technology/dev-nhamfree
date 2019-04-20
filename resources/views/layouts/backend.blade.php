<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>Admin-Foods Nham Free </title>
	


	<link rel="stylesheet" href="{{asset('backend/bootstrap/dist/css/bootstrap.min.css')}}" >


	<link rel="stylesheet" type="text/css" href="{{asset('backend/AdminLTE.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/skins/_all-skins.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('backend/morris.js/morris.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/jvectormap/jquery-jvectormap.css')}}">
  	<link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
</head>
<body class="hold-transition skin-purple sidebar-mini">
	
	@yield('content')

	<script type="text/javascript" src="{{asset('backend/jquery/dist/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('backend/bootstrap/dist/js/bootstrap.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('backend/morris.js/morris.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('backend/raphael/raphael.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('backend/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('backend/fastclick/lib/fastclick.js')}}"></script>
	<script type="text/javascript" src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('backend/dist/js/pages/dashboard.js')}}"></script>
	<script type="text/javascript" src="{{asset('backend/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>


</body>
</html>