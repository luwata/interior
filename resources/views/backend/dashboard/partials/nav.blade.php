<!-- left menu -->
<div class="col-md-3 left_col">
	<!-- left column -->
  	<div class="left_col scroll-view">
        <div class="navbar nav_title">
          <a href="index.html" class="site_title"><span class="admin-logo">U-INTERIORS</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
          <div class="profile_pic">
            <img src="../images/img.jpg" alt="..." class="img-circle profile_img">
          </div>
          <div class="profile_info">
            <span>{{__('interior.welcome')}},</span>
            <h2>Laurent Villet</h2>
          </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        	<div class="menu_section">
                <h3>{{__('interior.administrator')}}</h3>
                <ul class="nav side-menu">
                  	<li><a><i class="fa fa-edit"></i> {{__('interior.home')}} <span class="fa fa-chevron-down"></span></a>
	                    <ul class="nav child_menu">
	                    	<li><a href="index.html">{{__('interior.dashboard')}}</a></li>
	                    </ul>
                  	</li>
                    <li><a><i class="fa fa-user-circle"></i> {{__('interior.accounts')}} <span class="fa fa-chevron-down"></span></a>
                    	<ul class="nav child_menu">
                        	<li><a>{{__('interior.customers')}}<span class="fa fa-chevron-down"></span></a>
	                      		<ul class="nav child_menu">
		                        	<li class="sub_menu"><a href="#">{{__('interior.see_all_accounts')}}</a></li>
		                        	<li><a href="#">{{__('interior.add_an_account')}}</a></li>
		                        	<li><a href="#">{{__('interior.edit_or_delete_account')}}</a></li>
	                      		</ul>
                        	</li>
                      		<li><a>U-Interiors<span class="fa fa-chevron-down"></span></a>
	                      		<ul class="nav child_menu">
		                        	<li class="sub_menu"><a href="#">{{__('interior.see_all_accounts')}}</a></li>
		                        	<li><a href="#">{{__('interior.add_an_account')}}</a></li>
		                        	<li><a href="#">{{__('interior.edit_or_delete_account')}}</a></li>
	                      		</ul>
                        	</li>
                    	</ul>
                  	</li>
                  	<li><a><i class="fa fa-desktop"></i> {{__('interior.website_elements')}} <span class="fa fa-chevron-down"></span></a>
	                    <ul class="nav child_menu">              
		                    <li><a>{{__('interior.our_works')}}<span class="fa fa-chevron-down"></span></a>
		                    	<ul class="nav child_menu">
		                    		<li class="sub_menu"></li>
		                    		<li><a href="#">{{__('interior.see_all_works')}}</a></li>
                      				<li><a href="#">Add a Work</a></li>
                      				<li><a href="#">Edit or Delete a Work</a></li>
                      				<li><a href="#">Archive a Work</a></li>
                      				<li><a href="#">Consult Archives</a></li>	
                      			</ul>
                      		</li>
                      		<li><a href="#">Contact</a></li>				                    
	                    </ul>
                  	</li>
	                <li><a><i class="fa fa-cogs"></i> Projects in Progress <span class="fa fa-chevron-down"></span></a>
	                    <ul class="nav child_menu">
	                    	<li><a href="{{route('projects_home')}}">See and Edit Projects in Progress</a></li>
	                      	<li><a href="#">Add a New Project in Progress</a></li>
	                      	<li><a href="#">Consult Archives</a></li>
	                    </ul>
	                </li>
                  	<li><a><i class="fa fa-table"></i> Stock Managment <span class="fa fa-chevron-down"></span></a>
	                    <ul class="nav child_menu">
	                    	<li><a href="stock/stock_index.html">See all Stocks</a></li>
	                      	<li><a href="stock/stock_edit.html">Edit a Client Stock</a></li>
	                    </ul>
                  	</li>
                </ul>
          	</div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
          	<a data-toggle="tooltip" data-placement="top" title="Profile">
            	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
          	</a>
          	<a data-toggle="tooltip" data-placement="top" title="FullScreen">
            	<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
          	</a>
          	<a data-toggle="tooltip" data-placement="top" title="Help">
            	<span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
          	</a>
          	<a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('logout_dashboard')}}">
            	<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
          	</a>
        </div>
        <!-- /menu footer buttons -->
		</div>
</div>