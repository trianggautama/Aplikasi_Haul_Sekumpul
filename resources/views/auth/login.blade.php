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
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap/css/bootstrap.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/vendor/animate/animate.css')}}">

		<link rel="stylesheet" href="{{asset('admin/vendor/font-awesome/css/all.min.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/vendor/magnific-popup/magnific-popup.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('admin/css/theme.css')}}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('admin/css/skins/default.css')}}" />

	
		<!-- Head Libs -->
		<script src="{{asset('admin/vendor/modernizr/modernizr.js')}}"></script>

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
							<div class="form-group mb-3">
								<label>Username</label>
								<div class="input-group">
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-user"></i>
										</span>
                                    </span>
                                    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>
							</div>

							<div class="form-group mb-3">
								<div class="clearfix">
									<label class="float-left">Password</label>
									<a href="pages-recover-password.html" class="float-right">Lost Password?</a>
								</div>
								<div class="input-group">
									<input name="pwd" type="password" class="form-control form-control-lg" />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary mt-2">Sign In</button>
								</div>
                            </div>

							<p class="text-center">Don't have an account yet? <a href="pages-signup.html">Sign Up!</a></p>

						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<!-- Vendor -->
		<script src="{{asset('admin/vendor/jquery/jquery.js')}}"></script>
		<script src="{{asset('admin/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
		<script src="{{asset('admin/vendor/popper/umd/popper.min.js')}}"></script>
		<script src="{{asset('admin/vendor/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{asset('admin/vendor/common/common.js')}}"></script>
		<script src="{{asset('admin/vendor/nanoscroller/nanoscroller.js')}}"></script>
		<script src="{{asset('admin/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
		<script src="{{asset('admin/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('admin/js/theme.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{asset('admin/js/custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{asset('admin/js/theme.init.js')}}"></script>
	</body>
</html>