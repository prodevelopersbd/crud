<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Student</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
</head>
<body>



	<div class="wrap shadow">
		<a href="{{ url('/student') }}" class="btn btn-sm btn-success">All Students</a>
		<div class="card">
			<div class="card-body">
				<h2>Update Student Data</h2>

					@include('validate')

				<form action="{{ url('/student/update') }}/{{ $edit_data->id  }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" value="{{ $edit_data->name }}" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="{{ $edit_data->email }}" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" value="{{ $edit_data->cell }}" type="text">
					</div>
					<div class="form-group">
						<label for="">Age</label>
						<input name="age" class="form-control" value="{{ $edit_data->age }}"  type="text">
					</div>
					<div class="form-group">
						<label for="">Address</label>
						<input name="address" class="form-control" value="{{ $edit_data->address }}" type="text">
					</div>
					<div class="form-group">
                        <img class="img-fluid" src="{{  URL::to('')  }}/public/media/students/{{ $edit_data->photo }}" alt="">
						<label for="">Replace Photo</label>
						<input name="old_photo" class="form-control" value="{{ $edit_data->photo }}" type="hidden">
                        <input name="new_photo" class="form-control" type="file">

                    </div>
					<div class="form-group">
						<input name="submit" class="btn btn-primary" type="submit" value="Submit">
					</div>
				</form>
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
