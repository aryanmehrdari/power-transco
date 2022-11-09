@extends("layouts.main")

@section("Head-text")
    PowerTransco | Login
@endsection
@section("Head")

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">


    <link rel="icon" type="image/png" href="/images/icons/favicon.ico"/>
    <!--===============================================================================================-->

    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/util.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">



    <link rel="icon" href="/images/favicon.ico">


    <link rel="stylesheet" href="/plugins/bootstrap/bootstrap.min.css">
    <!-- Ionicons Fonts Css -->
    <link rel="stylesheet" href="/plugins/ionicons/ionicons.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="/plugins/animate-css/animate.css">
    <!-- Hero area slider css-->
    <link rel="stylesheet" href="/plugins/slider/slider.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="/plugins/slick/slick.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="/plugins/facncybox/jquery.fancybox.css">
    <!-- hover -->
    <link rel="stylesheet" href="/plugins/hover/hover-min.css">



    <!-- Ionicons Fonts Css -->
    <link rel="stylesheet" href="/plugins/ionicons/ionicons.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="/plugins/animate-css/animate.css">
    <!-- Hero area slider css-->
    <link rel="stylesheet" href="/plugins/slider/slider.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="/plugins/slick/slick.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="/plugins/facncybox/jquery.fancybox.css">
    <!-- hover -->
    <link rel="stylesheet" href="/plugins/hover/hover-min.css">
    <!-- template main css file -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/headers.css">
    <style type="text/css">.fancybox-margin{margin-right:17px;}</style>



    <link rel="stylesheet" href="/plugins-1/bootstrap/css/bootstrap.min.css">


    <link href="/plugins-1/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Fancy Box -->


    <!-- CUSTOM CSS -->
    <link href="/css-1/style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->

    <style>
        ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
            color: #ffffff;
        }
        :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
            color: #ffffff;
            opacity:  1;
        }
        ::-moz-placeholder { /* Mozilla Firefox 19+ */
            color: #ffffff;
            opacity:  1;
        }
        :-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: #ffffff;
        }
        ::-ms-input-placeholder { /* Microsoft Edge */
            color: #ffffff;
        }

        ::placeholder { /* Most modern browsers support this now. */
            color: #ffffff;
        }
        ::-webkit-input-placeholder {
            text-align: center;
        }

        :-moz-placeholder { /* Firefox 18- */
            text-align: center;
        }

        ::-moz-placeholder {  /* Firefox 19+ */
            text-align: center;
        }

        :-ms-input-placeholder {
            text-align: center;
        }

    </style>


@endsection

@section("Activator")

    <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
    <li><a href="/product" class="nav-link px-2 text-white">Product</a></li>
    <li><a href="/contact" class="nav-link px-2 text-white">Contact</a></li>
    <li>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation" style="
    margin-left: 10%;
">
            <span class="navbar-toggler-icon"></span>
        </button>
    </li>
@endsection
@section("LoginOut")
    <div class="row justify-content-center">
        <form class="nav col-12 mt-5" style="">
            <input type="search" class="col-12 form-control form-control-dark" placeholder="What Do You Want?" aria-label="Search" style="
    margin-top: 0%;
">
        </form>

    </div>

    <div class="row justify-content-center">
        <form id="myform" method="POST" class="nav col-12 mt-1" style="">
            @csrf
            <button onclick="$('#myform').attr('action','/search').submit();" class="btn btn-outline-primary nav justify-content-center col-12" style="" type="button">
                Search
            </button>
        </form>

    </div>
    <div class="row justify-content-center">

        <form id="myfrm" method="POST" class="nav col-12 mt-1 mb-2" style="">
            @csrf
            <a type="button" onclick="$('#myfrm').attr('action','/cp/logout').submit();" class="col-6 btn btn-outline-danger text-gray-200">Logout</a>
            <a href="/register" type="button" class="col-6 btn btn-outline-success">Sign Up</a>
        </form>
    </div>
@endsection


@section('mainSection')

    <div class="limiter">
        <div class="container-login100" style="background-color: white;">
            <div class="wrap-login100">

                <form method="POST" class="login100-form validate-form" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="nav col-lg-12 col-md-12">
                        <!-- About -->
                        <!-- footer logo -->
                        <img src="/images/logo.png" style="margin-top: -20%;" class="col-12">
                        <!-- description -->

                    </div>
                    <span class="login100-form-title p-b-34 p-t-27" style="margin-top: -20%;">
                        تغییر رمز عبور
                    </span>
                    <!-- Email Address -->
                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input style="::placeholder {color: white;}" placeholder="ایمیل" id="email" class="input100" type="email" name="email" :value="old('email')" required autofocus />
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input style="::placeholder {color: white;}" placeholder="رمز عبور" id="password" class="input100" type="password" name="password"  required />
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input style="::placeholder {color: white;}" placeholder="تکرار رمز عبور" id="password_confirmation" class="input100"  type="password" name="password_confirmation"  required />
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror



                    <div class="contact100-form-checkbox">
                        <ul>
                            <li>
                                @if($errors->any())
                                    @foreach ($errors->all() as $fid=>$error)
                                        <div class="text-white text-center">{{ $error }}</div>
                                    @endforeach
                                @endif
                            </li>
                        </ul>
                    </div>


                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            تغییر کلمه عبور
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>

@endsection
@section('Scripts')
    <script src="/assets/plugins/jquery/jquery.min.js"></script>
    <script>

        $('#formForgot').on('submit',function (event) {
            let forsat = new FormData();
            let name = $("#email").val();
            let stt = $("#status_vito").val();
            let yourl="{{ route('password.email') }}"
            $('button[type="submit"]').hide();
            $('#oje').show();
            forsat.append('email', name);
            forsat.append('status_vito', stt);
            event.preventDefault();
            $.ajaxSetup({
                headers: {'X-CSRF-Token': '{{csrf_token()}}'}
            })

            $.ajax({
                url: yourl,
                type: 'POST',
                dataType: 'json',
                data: forsat,
                processData: false,
                contentType: false,
                success: function (rez) {
                    if(rez['status']){
                        alert(rez['status']);
                        $('button[type="submit"]').show();
                        $('#oje').hide();
                        return false;
                    }else{
                        if(rez['email']){
                            alert(rez['email']);
                            $('button[type="submit"]').show();
                            $('#oje').hide();
                            return false;
                        }else{
                            if (rez['forgot']) {
                                return window.location.replace(yourl);
                            }else{
                                if (rez['pst']) {
                                    alert(rez['pst']);
                                    $('button[type="submit"]').show();
                                    $('#oje').hide();
                                    return false;
                                } else {
                                    alert(JSON.stringify(rez));
                                    $('button[type="submit"]').show();
                                    $('#oje').hide();
                                    return false;
                                }
                            }
                        }
                    }
                },
                error: function (zew) {
                    //alert("Please check form information and try again!");
                    alert(JSON.stringify(zew));
                    $('button[type="submit"]').show();
                    $('#oje').hide();
                    return false;
                }

            })

        })

    </script>
@endsection

