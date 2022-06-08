<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

	<script src="{{asset('js\jquery-2.1.1.min.js')}}"></script>
    <link href="{{asset('plugins\datatables\media\css\dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css\bootstrap.min.css')}}" rel="stylesheet">
            <!--Jasmine Stylesheet [ REQUIRED ]-->
    <link href="{{asset('css\style.css')}}" rel="stylesheet">
    <script src="{{asset('plugins\datatables\media\js\jquery.dataTables.js')}}"></script>
    <script src="{{asset('plugins\datatables\media\js\dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('plugins\datatables\extensions\Responsive\js\dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('js\demo\tables-datatables.js')}}"></script>
<style>

	/* Style the body */
	body {
	  	font-family: Arial, Helvetica, sans-serif;
	  	margin: 0;
	}

	.navbar {
	  	overflow: hidden;
	  	background-color: #337ab7;
	  	position: sticky;
	  	position: -webkit-sticky;
	  	top: 0;
	}

	/* Style the navigation bar links */
	.navbar a {
	  	float: left;
	  	display: block;
	  	color: white;
	  	text-align: center;
	  	padding: 14px 20px;
	  	text-decoration: none;
	}

	/* Right-aligned link */
	.navbar a.right {
	  	float: right;
	}

	/* Change color on hover */
	.navbar a:hover {
	  	background-color: #ddd;
	  	color: black;
	}

	/* Active/current link */
	.navbar a.active {
	  	background-color: #666;
	  	color: white;
	}
</style>
<body>
	@include("layouts.header")
     	<div class="boxed">
      		@yield('content')
    	</div>

</body>
</html>