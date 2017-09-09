<!-- top navigation in right -->
<ul class="nav navbar-nav navbar-right">

	<li class="dropdown">
	  	<a href="#" class="user-profile dropdown-toggle" id="dropdownTopRight" data-toggle="dropdown" aria-expanded="false">
	    	<img src="{{url('images/img.jpg')}}" alt="">Laurent Villet
	    	<span class="fa fa-angle-down"></span>
	  	</a>
	  	<ul class="dropdown-menu" aria-labelledby="dropdownTopRight">
	    	<li><a href="#">Profile</a></li>
	    	<li><a href="#">Help</a></li>
	    	<li><a href="{{route('locale', [app()->getLocale() === 'fr' ? 'en' : 'fr'])}}">Lang : {{app()->getLocale() === 'fr' ? 'en' : 'fr'}}</a></li>
	    	<li><a href="{{route('logout_dashboard')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
	  	</ul>
	</li>

</ul>