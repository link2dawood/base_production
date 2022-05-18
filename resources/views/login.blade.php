<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mash.</title>
	<link rel="shortcut icon" href="{{ asset('m-logo.png') }}" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

	<style type="text/css">

		img{
			width: 30%;
		}
		.op{
			font-size: 15px;
			color: darkgray;
		}
		input:focus { 
			outline: red!important;
			border: 2px solid green!important;
			box-shadow:none!important;
		}
		.divider:after,
		.divider:before {
			content: "";
			flex: 1;
			height: 1px;
			background: #eee;
		}
		.login-footer{
			color: #637381;
			font-weight: 450;
			margin-right: 1rem;
			text-decoration: none;
			float: right;
		}
		.background-image{
			background-image: url('{{ asset('bg.jpg')}}');
		}
	</style>
</head>
<body class="background-image">

	<div class="container">
		<div class="card my-4 col-sm-12 col-md-6" style="border-radius: 10px;">
			<div class="card-body px-4">
				<div class="row">
					<div class="col-12">
						<img class="my-4" alt="Log in to Shopify" src="{{ asset('m_logo.png')}}">
					</div>
				</div>
				<div>
					<h3>Login</h3>
					<p class="op">Continue to Mash.</p>
				</div>
				<label>Email</label>
				<div class="form-outline mb-4">
					<input type="email" id="Username" class="form-control" />
					<label>Password</label>
					<input type="Password" id="Password" class="form-control"><br>
					<div>
						<button type="button" class="btn btn-danger btn-block">Sign in</button>
						<div class="divider d-flex align-items-center my-4">
							<p class="text-center fw-bold mx-3 mb-0 text-muted">or</p>
						</div>
						<div>
							<button class="btn btn-lg btn-block btn-primary" style="background-color: white; color: black;" type="submit">
								<i class='bx bxl-apple'></i>
								<span>Log in with apple</span>
							</button>
							<button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: white; color: black;"type="submit">
								<i class='bx bxl-google'></i>
								<span>Log in with google</span>
							</button>
						</div>
						<div class="text-lg-start mt-3 font-weight-light">
							<p class="small fw-bold mt-2 pt-1 mb-0">New to Mash. ?<a href="{{url('/user-register')}}"
								class="link-danger" style="color: red;"> Get Started</a></p>

							</div>
						</div>
						<div class="py-3">
							<a class="login-footer" target="_blank" href="#" title="Help Center">Help</a>
							<a class="login-footer" target="_blank" href="#" title="Help Center">Privacy</a>
							<a class="login-footer" target="_blank" href="#" title="Help Center">Terms</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		</body>
		</html>