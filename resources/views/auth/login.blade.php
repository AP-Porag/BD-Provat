<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('frontend/images/fevicon.ico.png') }}" type="image/x-icon" />
    <title>BD Provat Login</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row pt-5">
                            <div class="col-md-6 text-left">
                                <h1 class="h4 text-gray-900 ml-4">BD Provat</h1>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('dataShow') }}" class="btn btn-outline-info mr-4"><i
                                        class="fa fa-home"></i> Home</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mx-auto">
                                <div class="p-5">
                                    <form class="user" action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email"
                                                class="form-control form-control-user @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" autocomplete="email" autofocus
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password"
                                                class="form-control form-control-user @error('password') is-invalid @enderror"
                                                name="password" autocomplete="current-password"" id="
                                                exampleInputPassword" placeholder="Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        {{-- <a href="index.html"
                                            class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> --}}
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('register') }}">Don't have an account? Create an
                                            Account from here!</a>
                                    </div>
                                </div>

                            </div>

                            <!-- Bootstrap core JavaScript-->
                            <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
                            <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

                            <!-- Core plugin JavaScript-->
                            <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

                            <!-- Custom scripts for all pages-->
                            <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
