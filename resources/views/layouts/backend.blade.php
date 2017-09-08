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
<!-- 	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	
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


	        </div>
	        <!-- /page content -->

	        <!-- footer content -->
	        <footer>
	        	<div class="clearfix"></div>
	        </footer>
	        <!-- /footer content -->
      	</div>
      	<!-- /main_container -->
    </div>
    <!-- container body -->

	<!-- Font-Awesome 4 -->
	<script src="https://use.fontawesome.com/c82eb558ab.js"></script>
	
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	
	<!-- Bootstrap 3 Javascript -->
	<script src="{{'js/app.js'}}"></script>
<!-- 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 -->
	<!--  Theme Scripts -->
    <script src="{{url('js/dashboard.js')}}"></script>

</body>
</html>