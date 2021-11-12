<!DOCTYPE html>
<html lang="en">

<head>
	<title>Superadmin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('admin')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin')}}/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin')}}/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin')}}/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin')}}/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin')}}/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin')}}/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin')}}/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/main.css')}}">
	<!--===============================================================================================-->
	<link href="{{ asset('admin3')}}/img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('admin3')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('admin3')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('admin3')}}/css/style.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<!-- Top Bar Start -->
		<div class="top-bar">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-5">
						<div class="logo">
							<a href="{{ route('home') }}">
								<h1>CityGuard</h1>
								<!-- <img src="{{ asset('admin3')}}/img/logo.jpg" alt="Logo">-->
							</a>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="top-bar-right">
							<div class="text">
								<h2>24 Hours/7 Days</h2>
								<p>We Are Here For You</p>
							</div>
							<div class="text">
								<h2>Local admin</h2>
								<p>Call Your Local admin For Free Consultation</p>
							</div>
                            <div class="social">
                                <a href="https://twitter.com/BijonMallik" target="_blank"><i class="fab fa-twitter" ></i></a>
                                <a href="https://www.facebook.com/rahul.r.rohan" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/in/bijon-mallik-40a2271ab/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/ibijon.17/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="http://youtube.com/mrsurge" target="_blank"><i class="fab fa-youtube"></i></a>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Top Bar End -->

		<!-- Nav Bar Start -->
		<div class="nav-bar">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
					<a href="#" class="navbar-brand">MENU</a>
					<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
						<div class="navbar-nav mr-auto">
							<a href="/" class="nav-item nav-link active">Home</a>
							<a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
							<a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
							<a href="/casestudy" class="nav-item nav-link">Feedbacks</a>
							<a href="{{ route('aboutus') }}" class="nav-item nav-link">About Us</a>
							<div class="nav-item dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Articles</a>
								<div class="dropdown-menu">
									<a href="blog.html" class="dropdown-item">International</a>
									<a href="single.html" class="dropdown-item">National</a>
								</div>
							</div>
							<a href="/contact" class="nav-item nav-link">Contact</a>
						</div>
						<div class="ml-auto">
							<a class="btn" href="https://www.pust.ac.bd/academic/departments/dept_teachers/dept_teachers_profile/100013">Get Appointment</a>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<!-- Nav Bar End -->

		<div class="limiter">
			<div class="container-login100" style="background-image: url('/admin/images/bg-03.png');">
				<div class="wrap-login100 p-t-30 p-b-50">
					<span class="login100-form-title p-b-41">
						Superadmin Login
					</span>

					<form method="POST" class="login100-form validate-form p-b-33 p-t-5" action="{{ route('superadmin.check') }}">
                        @if (Session::get('Fail'))
                            <div class="alert alert-danger">
                                 {{ Session::get('Fail') }}
                        @endif
                        @csrf




						<div class="wrap-input100 validate-input">
							<input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
							<span class="focus-input100" data-placeholder="&#xe82a;"></span>
							@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>


						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<input id="password" type="password" class="input100 form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password"><span class="focus-input100" data-placeholder="&#xe80f;"></span>
							@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="container-login100-form-btn m-t-32">
							<div class="rem100-form-btn">
								<div class="form-check">
									<input class="form-check-input custom-control-user" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

									<label class="form-check-label" for="remember">
										{{ __('Remember Me') }}
									</label>
								</div>
							</div>
						</div>


						<div class="forgot-login100-form-btn m-t-32">
							<button type="submit" class="login100-form-btn">
								{{ __('Login') }}
							</button>

							@if (Route::has('password.request'))
							<a class="btn btn-link text-warning pl-4" href="{{ route('password.request') }}">
								{{ __('Forgot Your Password?') }}
							</a>
							@endif
						</div>


					</form>
				</div>
			</div>
		</div>


		<div id="dropDownSelect1"></div>

		<!--===============================================================================================-->
		<script src="{{ asset('admin')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="{{ asset('admin')}}/vendor/animsition/js/animsition.min.js"></script>
		<!--===============================================================================================-->
		<script src="{{ asset('admin')}}/vendor/bootstrap/js/popper.js"></script>
		<script src="{{ asset('admin')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="{{ asset('admin')}}/vendor/select2/select2.min.js"></script>
		<!--===============================================================================================-->
		<script src="{{ asset('admin')}}/vendor/daterangepicker/moment.min.js"></script>
		<script src="{{ asset('admin')}}/vendor/daterangepicker/daterangepicker.js"></script>
		<!--===============================================================================================-->
		<script src="{{ asset('admin')}}/vendor/countdowntime/countdowntime.js"></script>
		<!--===============================================================================================-->
		<script src="{{ asset('admin')}}/js/main.js"></script>

</body>

</html>