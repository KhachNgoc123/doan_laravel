<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap & custom CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />	

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- Menu CSS/JS nếu dùng -->
    <link href="{{ asset('css/memenu.css') }}" rel="stylesheet" type="text/css" media="all" />
    <script src="{{ asset('js/memenu.js') }}"></script>
    <script>$(document).ready(function(){$(".memenu").memenu();});</script>
</head>
<body>
    <!-- Header -->
    @include('user.partials.header')

    <!-- Login section -->
    <div class="login_sec">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Login</li>
            </ol>
            <h2>Login</h2>

            <!-- Hiển thị lỗi validation -->
            @if ($errors->any())
                <div class="alert alert-danger p-2">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <!-- Form login -->
            <div class="col-md-6 log">
                <form method="POST" action="{{ route('user.login.post') }}">
                    @csrf

                    <h5>Email</h5>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>

                    <h5>Password</h5>
                    <input type="password" name="password" class="form-control" required>

                    <br>
                    <input type="submit" value="Login" class="btn btn-primary w-100">
                    <a class="acount-btn d-block mt-2" href="{{ url('user/register') }}">Create an Account</a>
                    <a class="d-block mt-1" href="#">Forgot Password?</a>
                </form>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Newsletter section -->
    <div class="subscribe">
        <div class="container">
            <h3>Newsletter</h3>
            <form>
                <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                <input type="submit" value="Subscribe">
            </form>
        </div>
    </div>

    <!-- Footer -->
    @include('user.partials.footer')
</body>
</html>
