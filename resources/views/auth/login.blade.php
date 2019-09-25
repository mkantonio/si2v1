<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V13</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('assets/login/images/icons/favicon.ico')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/css/main.css')}}">
    <!--===============================================================================================-->
</head>

<body style="background-color: #999999;">

    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more" style="background-image: url('{{asset('assets/login/images/bg-01.jpg')}}');">
            </div>
            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title p-b-59">
                        Inicio de Sesión
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Email requerido: ex@abc.xyz">
                        <span class="label-input100">Email</span>
                        <input id="email" class="input100" type="text" name="email" placeholder="Direccion de email...">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Contraseña requerida">
                        <span class="label-input100">Contraseña</span>
                        <input id="password" class="input100" type="password" name="password" placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>
                    {{-- boton de REGISTRO --}}
                    <a href="{{route('register')}}" class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Registrarme
                        </button>
                    </a>
                    {{-- boton de LOGIN --}}
                    <button type="submit" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                        {{ __('Iniciar sesión') }}
                        <i class="fa fa-long-arrow-right m-l-5"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!--===============================================================================================-->
    <script src="{{asset('assets/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/login/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/login/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('assets/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/login/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/login/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('assets/login/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/login/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/login/js/main.js')}}"></script>
</body>

</html>