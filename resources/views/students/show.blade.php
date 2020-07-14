<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show Student</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
</head>
<body>

	
	

	<div class="wrap shadow">
		<a href="{{ url('/student') }}" class="btn btn-sm btn-success">All Students</a>
		<div class="card">
			<div class="card-header">
				Profile Of - <b>{{ $single_student_data -> name  }}</b>
			</div>
			<div class="card-body">
				<img class="shadow" style="width: 200px;height: 200px;border-radius: 50%;border: 10px solid #fff;display: block;margin: auto;" src="{{ URL::to('') }}/public/media/students/{{ $single_student_data -> photo }}" alt="">

				<table class="table mt-4">
					<tr>
						<td>Name</td>
						<td>{{ $single_student_data -> name   }}</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>{{ $single_student_data -> email   }}</td>
					</tr>
					<tr>
						<td>Phone</td>
						<td>{{ $single_student_data -> cell   }}</td>
					</tr>
					<tr>
						<td>Address</td>
						<td>{{ $single_student_data -> address   }}</td>
					</tr>
				</table>
			</div>
			<div class="card-footer">
				
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