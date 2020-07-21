@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">
			<h5 style="margin-left: 1em">STUDENTS</h5>
			<a href = '/students/create' class="btn btn-primary">ADD STUDENTS</a>

		</div>
		<div class="card-body">
			
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID NUMBER</th>
						<th>STUDENT NAME</th>
						<th>COURSE</th>
						<th>YEAR</th>
						<th>GENDER</th>
						<th>ACTION</th>
						
					</tr>
				</thead>
				<tbody>
					@foreach($students as $student)
					<tr>
						<td>{{ $student->id_number }}</td>
						<td>{{ $student->student_name }}</td>
						<td>{{ $student->course }}</td>
						<td>{{ $student->year }}</td>
						<td>{{ $student->gender }}</td>
						<td>
							<a href="#">edit</a>
							<a href="#">delete</a>
							<a href="#">Status</a>
						</td>
					</tr>
				@endforeach	
				</tbody>
			</table>
			
		</div>
	</div>

@endsection
