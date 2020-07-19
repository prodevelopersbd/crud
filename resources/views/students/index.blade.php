<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All Students</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
</head>
<body>



	<div class="wrap-table shadow">
		<a href="{{ url('/student/create') }}" class="btn btn-sm btn-success">Add New Student</a>
		<div class="card">
			<div class="card-body">
				<h2>All Students</h2>
				@include('validate')
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						@foreach($all_students as $single_student )
							<tr>
								<td>{{ $single_student -> id }}</td>
								<td>{{ $single_student -> name }}</td>
								<td>{{ $single_student -> email }}</td>
								<td>{{ $single_student -> cell }}</td>
								<td><img src="{{ URL::to('') }}/public/media/students/{{ $single_student -> photo }}" alt=""></td>
								<td>
									<a class="btn btn-sm btn-info" href="{{ url('/student/view') }}/{{ $single_student -> id  }}">View</a>
									<a class="btn btn-sm btn-warning" href="{{ url('student/edit')  }}/{{ $single_student -> id   }}">Edit</a>
									<a id="delete_data"  class="btn btn-sm btn-danger" href="{{ '
									student/delete' }}/{{ $single_student -> id  }}">Delete</a>
								</td>
							</tr>
						@endforeach



					</tbody>
				</table>
			</div>
		</div>
	</div>








	<!-- JS FILES  -->
	<script src="{{ asset('public/assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/custom.js') }}"></script>
</body>
</html>
