@extends('layouts.backend')

@section('content')

		<div class="page-title">
      		<div class="title_left">
			<h2><i class="fa fa-cogs"></i> Projects in progress <small>/ <a href="project_index.html">See and Edit Projects in Progress</a></small></h2>
			</div>
		</div>
	    <div class="clearfix"></div>

		<div class="col-md-12 col-sm-12 col-xs-12">

			<div class="x_panel">
          		<div class="x_title">
	                <h4>Projects</h4>
	                <div class="clearfix"></div>
	            </div>
                <div class="x_content">
                  				
                    <p>List of all Projects in Progress and Completed</p>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      	<thead>
                        	<tr>
                          		<th style="width: 1%">#</th>
                          		<th style="width: 30%">Project Name</th>
                          		<th>Client name</th>
                          		<th style="width: 10%">Status</th>
                          		<th>#Edit</th>
                        	</tr>
                      	</thead>
                      	<tbody>

							@forelse($projects as $project)
						        <tr>
						        	<td>#</td>
	                          		<td>
	                          			<a>{{$project->title}}</a>
	                            		<br />
						          		<small>Created {{$project->created_at}}</small>
									</td>
		                          	<td>
										<a>{{$project->user->username}}</a>
		                          	</td>
		                          	<td>
	                            		<button type="button" class="btn btn-success btn-xs">{{$project->type}}</button>
	                          		</td>
	                          		<td>
	                            		<a href="{{route('projects_sheet', $project->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
	                            	
	                            		<a href="{{route('projects_edit', $project->id)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
	                            
	                            		<a href="#" class="btn btn-warning btn-xs"><i class="fa fa-archive"></i> Archive </a>
	                            		
	                            		<form action="{{route('dashboard.destroy', $project->id)}}" method="POST">
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