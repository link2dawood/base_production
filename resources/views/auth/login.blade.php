{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}


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