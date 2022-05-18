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
			border: 2px solid red!important;
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
			background-image: url('{{ asset('bg1.jpg')}}');
		}
	</style>
</head>
<body class="background-image">

	<div class="container">
		<div class="card my-4 col-sm-12 col-md-6" style="border-radius: 10px;">
			<div class="card-body px-4">
				<div class="row">
					<div class="col-12">
						<img class="my-4" alt="Log in to Mash." src="{{ asset('m_logo.png')}}">
					</div>
				</div>
				<div>
					<h3>Create a Mash. ID</h3>
					<p class="op">The ecommerce platform made for you</p>
				</div>
				<label>Email</label>
				<input class="form-control" type="text" name="text">
				<div class="form-outline mb-4">
					<div class="row mt-3">
						<div class="col-6">
							<label>First Name</label>
							<input class="form-control mb-4" type="text" name="text">
						</div>
						<div class="col-6">
							<label>Last Name</label>
							<input class="form-control mb-4" type="text" name="text">
						</div>
					</div>
					<div>
						<div>
							<div>
								<p class="op">Enter your first and last name as they appear on your government-issued ID.</p>
							</div>
							<div>
								<label>Password</label>
								<input class="form-control" type="Password" name="Password">
							</div>
							<div>
								<label class="mt-2">Confirm Password</label>
								<input class="form-control" type="Password" name="Password">
							</div>
							<div>
								<button type="button" class="btn text-white btn-block mt-3" style="background-color:#e22d2c ;">Create Shopify ID</button>
							</div>
						</div>
						<div class="text-lg-start mt-3 font-weight-light">
							<p class="small fw-bold mt-2 pt-1 mb-0">By proceeding, you agree to the<a href="#!"
								class="link-danger" style="color: red;"> Terms And Condition</a></p>
							</div>
						</div>
						<div class="text-lg-start mt-3 font-weight-light">
							<p class="small fw-bold mt-2 pt-1 mb-0">Already have a Mash ID ?<a href="{{url('/user-login')}}"
								class="link-danger" style="color: red;"> Login</a></p>
							</div>
						</div>
						<div class="py-3">
							<a class="login-footer" target="_blank" href="#" title="Help Center">Terms</a>
							<a class="login-footer" target="_blank" href="#" title="Help Center">Privacy</a>
							<a class="login-footer" target="_blank" href="#" title="Help Center">Help</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</body>
	</html>