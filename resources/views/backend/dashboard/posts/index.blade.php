@extends('layouts.backend')

@section('content')

		<div class="page-title">
      		<div class="title_left">
			<h2><i class="fa fa-cogs"></i> Posts in progress <small>/ <a href="project_index.html">See and Edit Posts in Progress</a></small></h2>
			</div>
		</div>
	    <div class="clearfix"></div>

		<div class="col-md-12 col-sm-12 col-xs-12">

			<div class="x_panel">
          		<div class="x_title">
	                <h4>Posts</h4>
	                <div class="clearfix"></div>
	            </div>
                <div class="x_content">
                  				
                    <p>List of all Posts in Progress</p>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      	<thead>
                        	<tr>
                          		<th style="width: 1%">#</th>
                          		<th style="width: 20%">Username</th>
                          		<th style="width: 40%">Project name</th>
                          		<th style="width: 20%">Date</th>
                          		<th>#Edit</th>
                        	</tr>
                      	</thead>
                      	<tbody>

							@forelse($posts as $post)
						        <tr>
						        	<td>#</td>
	                          		<td>
	                          			<a>{{$post->project->user->username}}</a>
									</td>
		                          	<td>
										<a>{{$post->project->title}}</a>
		                          	</td>
		                          	<td>
	                            		<a>{{$post->date_publication}}</a>
	                          		</td>
	                          		<td>
	                            		<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
	                            	
	                            		<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
	                            		
	                            		<form action="#" method="POST">
						              		{{csrf_field()}}
						              		{{method_field('DELETE')}}
						              		<input class="btn btn-danger btn-xs" type="submit" value="Delete" >
						            	</form>
						           		
	                          		</td>
	                        	</tr>
						    @empty
						    	<p>Il n'y a aucun projet !</p>
						    @endforelse
	                        
                      	</tbody>
                    </table>
                    <!-- end project list -->
              	</div>
              	<!-- /x-content -->
            </div>
            <!-- /x-panel -->
        	<a href="{{route('dashboard.index')}}">
				<button type="button" class="btn btn-back" aria-label="Left Align">
					<span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span>
					Back
				</button>
			</a>
		</div>

@endsection