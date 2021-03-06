@extends('layouts.dashboard')

@section('content')
<div class="card">
	<div class="card-header">User Setting</div>
	<div class="card-block">
		<div class="row">
			<div class="col-md-3">
				<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d98e9d944%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d98e9d944%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274.4375%22%20y%3D%22104.55625%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="..." class="rounded mx-auto d-block">
			</div>	
			<div class="col-md-5">
				<form>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" class="form-control">	
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" class="form-control">	
					</div>
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" class="form-control">	
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control">	
					</div>
					<div class="form-group">
						<label for="password_confirmation">Password Confirmation</label>
						<input type="password" name="password_confirmation" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="" class="btn btn-primary" value="Save">
					</div>
				</form>
			</div>	
		</div>
	</div>
</div>
<div class="card mt-3">
	<div class="card-header">App Setting</div>
		<div class="card-block">
			
		</div>
</div>
@endsection