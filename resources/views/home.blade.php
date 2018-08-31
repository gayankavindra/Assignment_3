@include('layouts.app')
 @include('inc.header')
	<div class="container">
		<div class="row">
			<legend>Student Management System</legend>
			<div class="row">
				<div class="col-md-30 col-lg-30">
					@if(session('info'))
						<div class="alert alert-success">
							{{session('info')}}
						</div>	
					@endif
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Facebook</th>
						<th>Mobile Number</th>
					</tr>
				</thead>
				<tbody>
					@if(count($students) > 0)
						@foreach($students->all() as $student)
						<tr>
							<td>{{ $student->name }}</td>
							<td>{{ $student->email }}</td>
							<td>{{ $student->fb }}</td>
							<td>{{ $student->mobile }}</td>
							<td>
								<a href='{{ url("/update/{$student->id}") }}' class="btn btn-success">Update</a> |
								<a href='{{ url("/delete/{$student->id}") }}' class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> 
							</td>
						</tr>
						@endforeach
					@endif
				</tbody>
			</table>
		</div>
	</div>
@include('inc.footer')
