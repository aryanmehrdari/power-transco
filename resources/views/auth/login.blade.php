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
    @if(\Illuminate\Support\Facades\Auth::user())
        <li><a class="fa" href="{{\Illuminate\Support\Facades\Auth::user()?'/buy':'/login'}}" style="font-size:24px;color: white;">&#xf07a;</a>
            <span class='badge badge-warning' id='lblCartCount'>{{$dum}}</span></li>
    @endif
    <li><a href="/login" class="nav-link px-2 text-info">ورود</a></li>
    <li><a href="/" class="nav-link px-2 text-white">خانه</a></li>
    <li><a href="/product" class="nav-link px-2 text-white">محصولات</a></li>
    <li><a href="/contact" class="nav-link px-2 text-white">ارتباط با ما</a></li>
    <li>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation" style="
    margin-left: 10%;
">
            <span class="navbar-toggler-icon"></span>
        </button>
    </li>
@endsection
@section("LoginOut")
    <div class="row text-center searchBox">

        <div class="col-md-2 hidden-xs"></div>




    </div>
    <div class="row justify-content-center">
        <form id="myform" method="GET" class="nav col-12 mt-5" style="">

            <input value="{{isset($q) ? $q : '' }}" id="ad_search_query" name="ad_search_query" type="search" class="col-12 form-control form-control-dark" placeholder="چی میخوای؟" aria-label="Search" style="
    margin-top: 0%;
">
            <div class="text-center bg-gray colapse ajax_search_sug col-12 dropdown">
                <ul class="text text-center text-white">

                </ul>
            </div>
            <button onclick="$('#myform').attr('action','/product').submit();" class="btn btn-outline-primary nav justify-content-center col-12" style="" type="button">
                جستجو
            </button>
        </form>

    </div>


    <div class="row justify-content-center">

        <form id="myfrm" method="POST" class="nav col-12 mt-1 mb-2" style="">
            @csrf
            @if(\Illuminate\Support\Facades\Auth::user())
                <a type="button" onclick="$('#myfrm').attr('action','/logout').submit();" class="col-6 btn btn-outline-danger text-gray-200">خروج</a>
            @else
                <a type="button" class="col-6 btn btn-outline-warning" href="/login">ورود</a>
            @endif

            @if(\Illuminate\Support\Facades\Auth::user())
                <a href="{{\Illuminate\Support\Facades\Auth::user()->is_admin==1?'/cp/dashboard/':'/home'}}" type="button" class="col-6 btn btn-outline-success">پنل کاربری</a>
            @else
                <a type="button" class="col-6 btn btn-outline-info" href="/register">ثبت نام</a>
            @endif
        </form>
    </div>
@endsection

@section("mainSection")

    <div class="limiter">
        <div class="container-login100" style="background-color: white;">
            <div class="wrap-login100">
                <form method="POST" action="/login" class="login100-form validate-form">
                    @csrf
                    <div class="nav col-lg-12 col-md-12">
                        <!-- About -->
                        <!-- footer logo -->
                        <img src="/images/logo.png" style="margin-top: -20%;" class="col-12">
                        <!-- description -->

                    </div>
                    <span class="login100-form-title p-b-34 p-t-27" style="margin-top: -20%;">
                        وارد شوید
                    </span>
                    <!-- Email Address -->
                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input placeholder="ایمیل" id="email" class="input100" type="email" name="email" {{isset($_COOKIE["remember"])!==false?(isset($_COOKIE["email"])!==false?'value='.$_COOKIE["email"]:''):''}} required autofocus />
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input placeholder="پسورد" id="password" class="input100" {{isset($_COOKIE["remember"])!==false?(isset($_COOKIE["password"])!==false?'value='.$_COOKIE["password"]:''):''}}
                               type="password"
                               name="password"
                               required autocomplete="current-password" />
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <!-- Password -->


                    <!-- Remember Me -->
                    <div class="contact100-form-checkbox">
                        <ul>
                            <li>
                                <input {{isset($_COOKIE["remember"])!==false?'checked':''}} value="1" class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
                                <label class="label-checkbox100" for="ckb1">
                                    مرا بخاطر بسپار
                                </label>
                            </li>
                            <li>
                                <a class="txt1" href="/forgot-password">
                                    فراموشی پسورد?
                                </a>
                            </li>
                            <li>
                                <a class="txt1" href="/register">
                                    ثبت نام
                                </a>
                            </li>
                            <br>
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
                            وارد شدن
                        </button>
                    </div>


                </form>

            </div>
        </div>
    </div>

@endsection

@section("Scripts")
    <!-- jquery -->
    <script src="/plugins/jQurey/jquery.min.js"></script>
    <!-- Form Validation -->
    <script src="/plugins/form-validation/jquery.form.js"></script>
    <script src="/plugins/form-validation/jquery.validate.min.js"></script>
    <!-- slick slider -->
    <script src="/plugins/slick/slick.min.js"></script>
    <!-- bootstrap js -->
    <script src="/plugins/bootstrap/bootstrap.min.js"></script>

    <!-- wow js -->
    <script src="/plugins/wow-js/wow.min.js"></script>
    <!-- slider js -->
    <script src="/plugins/slider/slider.js"></script>
    <!-- Fancybox -->
    <script src="/plugins/facncybox/jquery.fancybox.js"></script>
    <!-- template main js -->
    <script src="/js/main.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

    <script>
        $(".ajax_search_sug").hide();


        $("#ad_search_query").on("keyup",function () {


            if ($(this).val().length>1){
                getSearchSuggestion($(this).val());
            }else{
                $(".ajax_search_sug ul").html("");
                $(".ajax_search_sug").hide();
            }

        });


        function getSearchSuggestion(q) {

            $(".ajax_search_sug ul").html("");

            $.post("/search-sug", {sug: q, "_token": "{{ csrf_token() }}"}, function (data) {

                var result="";
                if (data.length > 0) {
                    for (i = 1; i < data.length; ++i) {
                        result +="<li> <a href='"  +  "/ad/" + data[i]['id'] + "' >" + data[i]['title'] + "</a></li>";
                        //  $(".ajax_search_sug ul").append("<li> <a href='"  +  "/ad/" + data[i]['id'] + "' >" + data[i]['title'] + "</a></li>");
                    }+7

                    $(".ajax_search_sug ul").replaceWith('<ul>' + result + '</ul>');
                    $(".ajax_search_sug").show();


                } else {
                    $(".ajax_search_sug ul").html("");
                    $(".ajax_search_sug").hide();
                }


            });


        }


    </script>

    <script>
        @foreach(\App\Models\Ad::all()->toArray() as $kej)
        $('#delbtn_'+{{$kej["id"]}}).click(function (){
            $('#felete').attr('action','/list/?id='+$('#delbtn_{{$kej["id"]}}').attr('title'))
        })
        @endforeach
    </script>
    <script>


        $(function () {
            $.ajaxSetup({
                headers: {'X-CSRF-Token': '{{csrf_token()}}'}
            });

            $('#photo').change(function () {
                var photo = $(this)[0].files[0];
                var formData = new FormData();

                formData.append('photo', photo);

                $.ajax({
                    xhr: function () {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function (evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                if (percentComplete === 100) {
                                    var imageUrl = window.URL.createObjectURL(photo)
                                    $('.imgPreview').attr('src', imageUrl);
                                    setTimeout(function () {
                                        $('.progress-bar').css('width', '0%');
                                    }, 2000)
                                }
                            }
                        }, false);
                        return xhr;
                    },
                    url: '/user/profile',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (res) {
                        if(!res.success){
                            alert(res.error)
                        }else{
                            alert("success!");
                            $('#image_path').val(res.image_path);
                        }
                    }
                })
            })
        });

    </script>


@endsection
