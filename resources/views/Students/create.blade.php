@extends('layouts.app')

@section('content')
<div class="card">
		<div class="card-header">
			<h5>Add Students</h5>
		</div>
		<div class="card-body">
			<form action="/students/store" method="POST">
				@csrf
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label for="id_number">ID NUMBER:</label>
							<input type="text"  name="id_number" placeholder="id_number" class='form-control'>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="student_name">STUDENT NAME:</label>
							<input type="text" name="student_name" placeholder="name" class="form-control">							
						</div>						
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="course">COURSE:</label>
							<input type="text" name="course" placeholder="course" class="form-control">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="year">YEAR:</label>
							<input type="text" name="year" placeholder="year" class="form-control">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="gender">GENDER:</label>
							<input type="text" name="gender" placeholder="gender" class="form-control">
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-sm-12 d-flex justify-content-end">
						<button class="btn btn-primary">Save Changes</button>
					</div>
				</div>
			</form>			
		</div>
	</div>

@endsection