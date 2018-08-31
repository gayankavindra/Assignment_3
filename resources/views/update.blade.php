@include('inc.header')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form class="form-horizontal" method="POST" action="{{ url('/edit',array($students->id)) }}">
					{{csrf_field()}}
				  <fieldset>
				    <legend>Student Managemanet System</legend>
				    @if(count($errors) >0 )
				    	@foreach($errors->all() as $error)
				    		<div class="alert alert-danger">
				    			{{$error}}
				    		</div>
				    	@endforeach
				    @endif
				    <div class="form-group">
				      <label for="exampleInputEmail1" class="col-lg-2 control-label">Name</label>
				      <div class="col-lg-10">
				      	<input type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?php echo $students->name; ?>">
				      </div>
				 	</div>
				 	<div class="form-group">
				      <label for="exampleInputEmail1" class="col-lg-2 control-label">Email</label>
				      <div class="col-lg-10">
				      	<input type="text" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo $students->email; ?>">
				      </div>
				 	</div>
					<div class="form-group">
				      <label for="exampleInputEmail1" class="col-lg-2 control-label">Facebook</label>
				      <div class="col-lg-10">
				      	<input type="text" name="fb" class="form-control" id="fb" placeholder="Facebook" value="<?php echo $students->fb; ?>">
				      </div>
				 	</div>
					<div class="form-group">
				      <label for="exampleInputEmail1" class="col-lg-2 control-label">Mobile Number</label>
				      <div class="col-lg-10">
				      	<input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile Number" value="<?php echo $students->mobile; ?>">
				      </div>
				 	</div>

				 	<div class="form-group">
				 		<div class="col-lg-10 col-lg-offset-2">
				 			<button type="submit" class="btn btn-primary">Update</button>


				 			<a href="{{ url('/')}}" class="btn btn-primary">Back</a>
				 		</div>
				 	</div>
				  </fieldset>
				</form>
			</div>
		</div>
	</div>
@include('inc.footer')