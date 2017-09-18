@extends('layouts.backend')

@section('content')

	<div class="page-title">
		<div class="title_left">
			<h2><i class="fa fa-cogs"></i> Projects in progress <small>/ <a href="project_index.html">Add a New Project</a> / <a href="project_activity_report.html">Adding Form</a></small></h2>
		</div>
	</div>
	<div class="clearfix"></div>

	<div class="col-md-12 col-sm-12 col-xs-12">

		<div class="x_panel">
	  		<div class="x_title">
	            <h4>Project Add Form</h4>
	            <div class="clearfix"></div>
	        </div>
	        <div class="x_content">
	          				
	            <form action="{{route('projects_store')}}" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
	            {{ csrf_field() }}
					
					<!-- Customer input -->
	               	<div class="form-group">
	                	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_id">Customer Selection <span class="required">*</span>
	                	</label>
	                 	
	                 	<div class="col-md-6 col-sm-6 col-xs-12">
	                 		<SELECT id="user_id" name="user_id" class="form-control col-md-7 col-xs-12" required="required">

								@forelse ($customers as $custID => $username)
									<OPTION value="{{$custID}}">{{$username}}</OPTION>
								@empty
								@endforelse
							</SELECT>
	                	</div>

					</div>

	              	<!-- Project Title input -->
	      			<div class="form-group">
	        			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Project Title <span class="required">*</span>
	        			</label>
	        			
	        			<div class="col-md-6 col-sm-6 col-xs-12">
	          				<input type="text" id="title" name="title" required="required" class="form-control col-md-7 col-xs-12">
	        			</div>
	      			</div>

	      			<!-- Stock Quantity input -->
	      			<div class="form-group">
	        			<label for="scheduled_at" class="control-label col-md-3 col-sm-3 col-xs-12">End Date of project * </label>
	            		
						<div class="col-md-6 col-sm-6 col-xs-12">
	               			<div class='input-group date' id='myDatepicker2'>
	                    		<input type='text' class="form-control" id="scheduled_at" name="scheduled_at" />
	                    		<span class="input-group-addon">
	                       		<span class="glyphicon glyphicon-calendar"></span>
	                    		</span>
	               			</div>
	               		</div>
	            			
	       				
	      			</div>

	      			<div class="form-group">
	                	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="location">Location of Site <span class="required">*</span></label>
	                	
	                	<div class="col-md-6 col-sm-6 col-xs-12">
	          				<input type="text" id="location" name="location" required="required" class="form-control col-md-7 col-xs-12">
	        			</div>
	              	</div>

	      			<div class="ln_solid"></div>
	  				<div class="form-group">
	    				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  	<button class="btn btn-primary" type="reset">Reset</button>
	                      	<button type="submit" class="btn btn-success">Submit</button>
	    				</div>
	  				</div>
	    		</form>
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