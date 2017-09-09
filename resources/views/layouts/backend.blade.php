<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>U-Interiors - Dashboard</title>
	
	<!-- Bootstrap 3 -->
    <link href="{{url('css/app.css')}}" rel="stylesheet">

    <!-- Datatables CSS -->
    <link href="{{url('css/datatables.css')}}" rel="stylesheet">

    <!-- Buttons datatables CSS -->
    <link href="{{url('css/buttons.css')}}" rel="stylesheet">

    <!-- Responsive datatables CSS -->
    <link href="{{url('css/responsive.css')}}" rel="stylesheet">
	
	<!-- Custom styles for this template -->
    <link href="{{url('css/dashboard.css')}}" rel="stylesheet">


</head>
<body class="nav-md">
	<!-- container body -->
    <div class="container body">
    	<!-- main_container -->
      	<div class="main_container">
			
			<!-- Menu Left -->
			@include('backend.dashboard.partials.nav')

	        <!-- top navigation -->
	        <div class="top_nav">
	          	<div class="nav_menu">
		            <nav>
		              	<div class="nav toggle">
		                	<a id="menu_toggle"><i class="fa fa-bars"></i></a>
		              	</div>
						<!-- top navigation in right -->
		              	@include('backend.dashboard.partials.topnavright')
		            </nav>
	          	</div>
	        </div>
	        <!-- /top navigation -->

        	<!-- page content -->
        	<div class="right_col" role="main">

				@yield('content') 
				
	        </div>
	        <!-- /page content -->

	        <!-- footer content -->
	        @include('backend.dashboard.partials.footer')
	        <!-- /footer content -->
      	</div>
      	<!-- /main_container -->
    </div>
    <!-- container body -->

	<!-- Font-Awesome 4 -->
	<script src="https://use.fontawesome.com/c82eb558ab.js"></script>

	<!-- Lightbox Ekko -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.min.js"></script>
	
	<!-- Bootstrap 3 Javascript et les Node-modules dependancies -->
	<script src="{{url('js/app.js')}}"></script>

	<!-- Theme Scripts -->
    <script src="{{url('js/dashboard.js')}}"></script>

</body>
</html>