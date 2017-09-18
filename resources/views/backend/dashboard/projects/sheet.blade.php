@extends('layouts.backend')

@section('content')


	<div class="page-title">
		<div class="title_left">
			<h2><i class="fa fa-cogs"></i> Projects in progress <small>/ <a href="project_index.html">See and Edit Projects in Progress</a> / <a href="project_activity_report.html">Project Report</a></small></h2>
		</div>
	</div>
	<div class="clearfix"></div>

	<div class="col-md-12 col-sm-12 col-xs-12">

		<div class="x_panel">
	  		<div class="x_title">
	            <h4>Project Report</h4>
	            <div class="clearfix"></div>
	        </div>
	        <div class="x_content">
	            <div class="col-md-2 col-sm-2 col-xs-12 profile_left">
	              <div class="profile_img">
	                <div id="crop-avatar">
	                  <!-- Current avatar -->
	                  <img class="img-responsive avatar-view" src="{{url('images/picture.jpg')}}" alt="Avatar" title="Change the avatar">
	                </div>
	              </div>
	              <h3>Sud Express</h3>

	              <ul class="list-unstyled user_data">
	                <li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA
	                </li>
<!-- 
	                <li>
	                  <i class="fa fa-calendar-o"></i> Started : 01.01.2018
	                </li> -->
	                <li>
	                  <i class="fa fa-calendar"></i> Scheduled : 30.05.2018
	                </li>
	              </ul>

	            </div>
	            <div class="col-md-10 col-sm-10 col-xs-12">

	              <div class="profile_title">
	                <div class="col-md-6">
	                  <h2>Textile Shop Arrangement </h2>
	                </div>
	                <div class="col-md-6">
	                  <div class="last-update pull-right">
	                    <b>Last Update : </b>		                            
	                    <span> May 24, 2018</span>
	                  </div>
	                </div>
	              </div>
	              

	              
				<!-- photo gallery -->
			  	<div class='row'>
			    	<div>
				      	<div class="carousel slide media-carousel" id="media">
				        	<div class="carousel-inner">
					          	<div class="item  active">
					            	<div class="row">
						              	<div class="col-xs-12 col-md-6 col-lg-3">
						                	<a href="{{url('images/lightbox/shop01.jpg')}}" class="thumbnail" data-toggle="lightbox">
					      						<img src="{{url('images/thumbnails/shop01.jpg')}}">
					    					</a>
						              	</div>          
						              	<div class="col-xs-12 col-md-6 col-lg-3">
						                	<a href="{{url('images/lightbox/shop02.jpg')}}" class="thumbnail" data-toggle="lightbox">
					      						<img src="{{url('images/thumbnails/shop02.jpg')}}">
					    					</a>
						              	</div>
						              	<div class="col-xs-12 col-md-6 col-lg-3">
						                	<a href="{{url('images/lightbox/shop03.jpg')}}" class="thumbnail" data-toggle="lightbox">
					      						<img src="{{url('images/thumbnails/shop03.jpg')}}">
					    					</a>
						              	</div>   
						              	<div class="col-xs-12 col-md-6 col-lg-3">
						                	<a href="{{url('images/lightbox/shop04.jpg')}}" class="thumbnail" data-toggle="lightbox">
					      						<img src="{{url('images/thumbnails/shop04.jpg')}}">
					    					</a>
						              	</div>     
					            	</div>
					          	</div>
					          	<div class="item">
					            	<div class="row">
						              	<div class="col-xs-12 col-md-6 col-lg-3">
						                	<a href="{{url('images/lightbox/shop05.jpg')}}" class="thumbnail" data-toggle="lightbox">
					      						<img src="{{url('images/thumbnails/shop05.jpg')}}">
					    					</a>
						              	</div>          
						              	<div class="col-xs-12 col-md-6 col-lg-3">
						                	<a href="{{url('images/lightbox/shop06.jpg')}}" class="thumbnail" data-toggle="lightbox">
					      						<img src="{{url('images/thumbnails/shop06.jpg')}}">
					    					</a>
						              	</div>
						              	<div class="col-xs-12 col-md-6 col-lg-3">
						                	<a href="{{url('images/lightbox/shop07.jpg')}}" class="thumbnail" data-toggle="lightbox">
					      						<img src="{{url('images/thumbnails/shop07.jpg')}}">
					    					</a>
						              	</div>   
						              	<div class="col-xs-12 col-md-6 col-lg-3">
						                	<a href="{{url('images/lightbox/shop08.jpg')}}" class="thumbnail" data-toggle="lightbox">
					      						<img src="{{url('images/thumbnails/shop08.jpg')}}">
					    					</a>
						              	</div>             
					            	</div>
					          	</div>
				        	</div>
			        		<a data-slide="prev" href="#media" class="left carousel-control">‹</a>
			        		<a data-slide="next" href="#media" class="right carousel-control">›</a>
			      		</div>                          
			    	</div>
				</div>
				<!-- end of phot gallery -->






	              <div class="">

	                    <!-- start recent activity -->
	                    <ul class="messages">
	                      	<li>
	                            <img src="{{url('images/img.jpg')}}" class="avatar" alt="Avatar">
	                            <div class="message_date">
	                              <h3 class="date text-info">24</h3>
	                              <p class="month">May</p>
	                            </div>
	                            <div class="message_wrapper">
	                              	<h4 class="heading">Laurent Villet</h4>
	                              	<blockquote class="message">
	                              		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea perspiciatis voluptatem optio assumenda, facere esse distinctio officia tempore, corrupti commodi reprehenderit dolorum dicta quidem earum, sint sapiente iusto enim culpa!
	                              		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus praesentium aliquam cum dicta doloribus, sunt corporis eaque nemo placeat eos magni eveniet suscipit quos nostrum illum atque? Delectus, laborum, dicta?
	                              	</blockquote>
	                              	<div class="attachment">
			                            <p>
			                              	<span><i class="fa fa-paperclip"></i> 4 attachments </span>
			                            </p>
			                            <ul>
			                              	<li class="col-xs-3 col-md-2">
			                                	<a href="#" class="thumbnail">
			                                  		<img src="{{url('images/thumbnails/shop01.jpg')}}" alt="img" />
			                                	</a>
			                              	</li>
			                              	<li class="col-xs-3 col-md-2">
			                                	<a href="#" class="thumbnail">
			                                  		<img src="{{url('images/thumbnails/shop02.jpg')}}" alt="img" />
			                                	</a>
			                              	</li>
			                              	<li class="col-xs-3 col-md-2">
			                               	 	<a href="#" class="thumbnail">
			                                  		<img src="{{url('images/thumbnails/shop03.jpg')}}" alt="img" />
			                               	 	</a>
			                              	</li>
			                              	<li class="col-xs-3 col-md-2">
			                               	 	<a href="#" class="thumbnail">
			                                  		<img src="{{url('images/thumbnails/shop04.jpg')}}" alt="img" />
			                               	 	</a>
			                              	</li>
			                            </ul>
			                        </div>
	                            </div>
	                      	</li>
	                      	<li>
	                            <img src="{{url('images/img.jpg')}}" class="avatar" alt="Avatar">
	                            <div class="message_date">
	                              <h3 class="date text-info">22</h3>
	                              <p class="month">May</p>
	                            </div>
	                            <div class="message_wrapper">
	                              	<h4 class="heading">Laurent Villet</h4>
	                              	<blockquote class="message">
	                              		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea perspiciatis voluptatem optio assumenda, facere esse distinctio officia tempore, corrupti commodi reprehenderit dolorum dicta quidem earum, sint sapiente iusto enim culpa!
	                              		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus praesentium aliquam cum dicta doloribus, sunt corporis eaque nemo placeat eos magni eveniet suscipit quos nostrum illum atque? Delectus, laborum, dicta?
	                              	</blockquote>
	                              	<div class="attachment">
			                            <p>
			                              	<span><i class="fa fa-paperclip"></i> 2 attachments </span>
			                            </p>
			                            <ul>
			                              	<li class="col-xs-3 col-md-2">
			                                	<a href="#" class="thumbnail">
			                                  		<img src="{{url('images/thumbnails/shop08.jpg')}}" alt="img" />
			                                	</a>
			                              	</li>
			                              	<li class="col-xs-3 col-md-2">
			                                	<a href="#" class="thumbnail">
			                                  		<img src="{{url('images/thumbnails/shop09.jpg')}}" alt="img" />
			                                	</a>
			                              	</li>
			                            </ul>
			                        </div>
	                            </div>
	                      	</li>
	                      	<li>
	                            <img src="{{url('images/img.jpg')}}" class="avatar" alt="Avatar">
	                            <div class="message_date">
	                              <h3 class="date text-info">20</h3>
	                              <p class="month">May</p>
	                            </div>
	                            <div class="message_wrapper">
	                              	<h4 class="heading">Laurent Villet</h4>
	                              	<blockquote class="message">
	                              		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea perspiciatis voluptatem optio assumenda, facere esse distinctio officia tempore, corrupti commodi reprehenderit dolorum dicta quidem earum, sint sapiente iusto enim culpa!
	                              		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus praesentium aliquam cum dicta doloribus, sunt corporis eaque nemo placeat eos magni eveniet suscipit quos nostrum illum atque? Delectus, laborum, dicta?
	                              	</blockquote>
	                              	<div class="attachment">
			                            <p>
			                              	<span><i class="fa fa-paperclip"></i> 3 attachments </span>
			                            </p>
			                            <ul>
			                              	<li class="col-xs-3 col-md-2">
			                                	<a href="#" class="thumbnail">
			                                  		<img src="{{url('images/thumbnails/shop05.jpg')}}" alt="img" />
			                                	</a>
			                              	</li>
			                              	<li class="col-xs-3 col-md-2">
			                                	<a href="#" class="thumbnail">
			                                  		<img src="{{url('images/thumbnails/shop06.jpg')}}" alt="img" />
			                                	</a>
			                              	</li>
			                              	<li class="col-xs-3 col-md-2">
			                               	 	<a href="#" class="thumbnail">
			                                  		<img src="{{url('images/thumbnails/shop07.jpg')}}" alt="img" />
			                               	 	</a>
			                              	</li>
			                            </ul>
			                        </div>
	                            </div>
	                      	</li>
	                    </ul>
	                    <!-- end recent activity -->

	            
	              </div>
	            </div>
	          </div>
	      	<!-- /x-content -->
	    </div>
	    <!-- /x-panel -->
		<a href="{{route('projects_home')}}">
			<button type="button" class="btn btn-back" aria-label="Left Align">
				
					<span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span>
					Back
			</button>
		</a>
	</div>


@endsection