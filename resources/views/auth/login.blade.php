<!doctype html>
<html class="fixed">

<head>
	<!-- Basic -->
	<meta charset="UTF-8">

	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="description" content="Porto Admin - Responsive HTML5 Template">
	<meta name="author" content="okler.net">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light"
		rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap/css/bootstrap.css')}}" />
	<link rel="stylesheet" href="{{asset('admin/vendor/font-awesome/css/all.min.css')}}" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{asset('admin/css/theme.css')}}" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="{{asset('admin/css/skins/default.css')}}" />


	<!-- Head Libs -->
 
</head>

<body>
	<!-- start: page -->
	<section class="body-sign">
		<div class="center-sign">

			<div class="panel card-sign">
				<div class="card-body">
					<div class="text-center">
						<a href="/" class="logo"><br>
							<img src="{{asset('admin/img/logo.png')}}" height="70" alt="Porto Admin" />
						</a>
						<p> Sistem Informasi Haul Sekumpul dan Mushola Arraudhah Martapura</p>
					</div>
					<form method="POST" action="{{ route('login') }}">
						@csrf
						<div class="input-group mb-3">
						<input id="username" type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" autofocus>
							@error('username')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						<div class="input-group-append">
							<div class="input-group-text">
							<span class="fas fa-user"></span>
							</div>
						</div>
						</div>
						<div class="form-group mb-3">
							<div class="clearfix">
								<label class="float-left">Password</label>
								<a href="pages-recover-password.html" class="float-right">Lost Password?</a>
							</div>
							<div class="input-group">
								<input name="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" />
								<span class="input-group-append">
									<span class="input-group-text">
										<i class="fas fa-lock"></i>
									</span>
								</span>
								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

						<div class="row">
							<div class="col-sm-8">
								<div class="checkbox-custom checkbox-default">
									<input id="RememberMe" name="rememberme" type="checkbox" />
									<label for="RememberMe">Remember Me</label>
								</div>
							</div>
							<div class="col-sm-4 text-right">
								<button type="submit" class="btn btn-primary mt-2">Sign In</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- end: page -->
	<!-- Sweetalert -->
	<script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>
	<!-- Vendor -->
</body>

</html>