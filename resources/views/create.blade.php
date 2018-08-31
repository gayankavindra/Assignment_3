@include('inc.header')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form class="form-horizontal" method="post" action="{{ url('/insert')}}">
					{{csrf_field()}}
				  <fieldset>
				    <legend>Laravel CRUD Application</legend>
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
				      	<input type="text" name="name" class="form-control" id="name" placeholder="Name">
				      </div>
				 	</div>
				 	<div class="form-group">
				      <label for="exampleInputEmail1" class="col-lg-2 control-label">Email</label>
				      <div class="col-lg-10">
				      	<input type="text" name="email" class="form-control" placeholder="Email">
				      </div>
				 	</div>
					<div class="form-group">
				      <label for="exampleInputEmail1" class="col-lg-2 control-label">Facebook</label>
				      <div class="col-lg-10">
				      	<input type="text" name="fb" class="form-control" placeholder="Facebook">
				      </div>
				 	</div>
					<div class="form-group">
				      <label for="exampleInputEmail1" class="col-lg-2 control-label">Mobile Number</label>
				      <div class="col-lg-10">
				      	<input type="text" name="mobile" class="form-control" placeholder="Mobile Number">
				      </div>
				 	</div>

				 	<div class="form-group">
				 		<div class="col-lg-10 col-lg-offset-2">
				 			<button type="submit" class="btn btn-primary">Submit</button>


				 			<a href="{{ url('/')}}" class="btn btn-primary">Back</a>
				 		</div>
				 	</div>
				  </fieldset>
				</form>
			</div>
		</div>
	</div>
@include('inc.footer')