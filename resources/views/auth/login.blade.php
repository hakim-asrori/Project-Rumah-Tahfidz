<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="/image/png" href="{{ url('') }}/layout_login/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/layout_login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/layout_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/layout_login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/layout_login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/layout_login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/layout_login/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/layout_login/css/main.css">
    <!--===============================================================================================-->
    <script src="{{ url('') }}/layout_login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('') }}/layout_login/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <!--===============================================================================================-->
</head>

<body>
    @if (session('message'))
    <script>
        {!! session('message') !!}
    </script>
    @endif
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">

                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?= url('/layout_login/images/logo.png') ?>" alt="IMG">
                </div>

                <form method="POST" action="{{ url('/login') }}" class="login100-form validate-form">

                    @csrf

                    <span class="login100-form-title">
                        Rumah Tahfidz
                    </span>

                    <div class="wrap-input100" data-validate = "Telepon harap diisi!">
                        <input class="input100" type="text" name="telepon" placeholder="Telepon" id="telepon" value="{{ old('telepon') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password harap diisi!">
                        <input class="input100" type="password" name="password" placeholder="Password" id="password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>
                    <div class="text-center p-t-12">
                        @if($errors->any())
                        <p style="color: red">{{$errors->first()}}</p>
                        @endif
                    </div>

                </form>

            </div>
        </div>
    </div>


    <!--===============================================================================================-->
    <script src="{{ url('') }}/layout_login/vendor/bootstrap/js/popper.js"></script>
    <script src="{{ url('') }}/layout_login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('') }}/layout_login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('') }}/layout_login/vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="{{ url('') }}/layout_login/js/main.js"></script>

</body>
</html>
