@extends('layouts.backend')

@section('content')
	{{ $foo }}

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
                          		<th>Project Progress</th>
                          		<th style="width: 10%">Status</th>
                          		<th>#Edit</th>
                        	</tr>
                      	</thead>
                      	<tbody>

	                        <tr>
	                          	<td>#</td>
	                          	<td>
	                            	<a>Textile Shop Arrangement</a>
	                            	<br />
	                            	<small>Created 01.01.2018</small>
	                          	</td>
	                          	<td>
									<a>Sud Express</a>
	                          	</td>
	                          	<td class="project_progress">
	                            	<div class="progress progress_sm">
	                              		<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="100"></div>
	                            	</div>
	                            	<small>100% Complete</small>
	                          	</td>
	                          	<td>
	                            	<button type="button" class="btn btn-success btn-xs">Success</button>
	                          	</td>
	                          	<td>
	                            	<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
	                            	<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
	                            	<a href="#" class="btn btn-warning btn-xs"><i class="fa fa-archive"></i> Archive </a>
	                            	<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
	                          	</td>
	                        </tr>
	                        
                      	</tbody>
                    </table>
                    <!-- end project list -->
              	</div>
              	<!-- /x-content -->
            </div>
            <!-- /x-panel -->
        	<a href="../index.html">
				<button type="button" class="btn btn-back" aria-label="Left Align">
					<span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span>
					Back
				</button>
			</a>
		</div>

@endsection