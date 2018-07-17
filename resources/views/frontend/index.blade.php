<?php
use Illuminate\Support\Facades\Auth;
?>
<!DOCTYPE html>
<html>
<head>
	<title>{{$title}}</title>

	<link rel="stylesheet" type="text/css" href="{{url('/fronttemplate_style/assets/css/bootstrap.min.css')}}">
	<link rel="icon" type="icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="{{url('/fronttemplate_style/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('/fronttemplate_style/assets/css/sticky-footer-navbar.css')}}">
</head>
<body>

@include('frontend.inc.header')
	
    @yield('content')

    @if($token === 'main')
		@include('frontend.foot-artikel')
	@endif

@include('frontend.inc.footer')

	<script type="text/javascript" src="{{url('/fronttemplate_style/assets/js/jquery-3.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{url('/fronttemplate_style/assets/js/bootstrap.min.js')}}"></script>
 	<script src="{{url('/fronttemplate_style/assets/js/popper.min.js')}}"  type="text/javascript"></script>
    <script src="{{url('/fronttemplate_style/assets/js/holder.min.js')}}"  type="text/javascript"></script>
</body>
</html>