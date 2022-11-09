@extends("layouts.main")

@section("Head-text")
    PowerTransco | Prudocts
@endsection
@section("Head")

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

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
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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

        .badge {
            padding-left: 9px;
            padding-right: 9px;
            -webkit-border-radius: 9px;
            -moz-border-radius: 9px;
            border-radius: 9px;
        }

        .label-warning[href],
        .badge-warning[href] {
            background-color: #c67605;
        }
        #lblCartCount {
            font-size: 12px;
            background: #ff0000;
            color: #fff;
            padding: 0 5px;
            vertical-align: top;
            margin-left: -10px;
        }

    </style>


@endsection

@section("Activator")
    @if(\Illuminate\Support\Facades\Auth::user())
        <li><a class="fa" href="{{\Illuminate\Support\Facades\Auth::user()?'/buy':'/login'}}" style="font-size:24px;color: white;">&#xf07a;</a>
            <span class='badge badge-warning' id='lblCartCount'>{{$dum}}</span></li>
    @endif
    <li><a href="/" class="nav-link px-2 text-white">خانه</a></li>
    <li><a href="/product" class="nav-link px-2 text-white">محصولات</a></li>
    <li><a href="/contact" class="nav-link px-2 text-info">ارتباط با ما</a></li>
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

    <section class="hero-area bg-1 text-center overly">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Header Contetnt -->
                    <div class="content-block" style="
    padding: 0%;
">
                        <h1>ارتباط با ما</h1>



                    </div>
                    <!-- Advance Search -->


                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>
    <section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
                <div class="block">
                    <h2 class="subtitle wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay=".3s" style="visibility: visible; animation-duration: 500ms; animation-delay: 0.3s; animation-name: fadeInDown;">ارسال پیام به ما</h2>
                    <p class="subtitle-des wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay=".5s" style="visibility: visible; animation-duration: 500ms; animation-delay: 0.5s; animation-name: fadeInDown;">
                       شما میتوانید تمامی نظرات و پیشنهاد های خود را با ما در میان بگذارید و یا چنانچه مشکل یا کاری داشتید از همین طریق با ما در میا بگذارید.
                    </p>
                    <div class="contact-form">
                        <form id="contact-form" method="#" action="#" role="form" novalidate="novalidate">

                            <div class="form-group wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay=".6s" style="visibility: visible; animation-duration: 500ms; animation-delay: 0.6s; animation-name: fadeInDown;">
                                <input type="text" placeholder="نام شما" class="form-control" name="name" id="name">
                            </div>

                            <div class="form-group wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay=".8s" style="visibility: visible; animation-duration: 500ms; animation-delay: 0.8s; animation-name: fadeInDown;">
                                <input type="email" placeholder="ایمیل شما" class="form-control" name="email" id="email">
                            </div>

                            <div class="form-group wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1s" style="visibility: visible; animation-duration: 500ms; animation-delay: 1s; animation-name: fadeInDown;">
                                <input type="text" placeholder="موضوع" class="form-control" name="subject" id="subject">
                            </div>

                            <div class="form-group wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1.2s" style="visibility: visible; animation-duration: 500ms; animation-delay: 1.2s; animation-name: fadeInDown;">
                                <textarea rows="6" placeholder="متن پیام" class="form-control" name="message" id="message"></textarea>
                            </div>


                            <div id="submit" class="wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1.4s" style="visibility: visible; animation-duration: 500ms; animation-delay: 1.4s; animation-name: fadeInDown;">
                                <button type="submit" id="contact-submit" class="btn btn-default btn-send hvr-bounce-to-right" value="Send Message">ارسال پیام</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                 <div class="map-area">
                    <h2 class="subtitle  wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay=".3s" style="visibility: visible; animation-duration: 500ms; animation-delay: 0.3s; animation-name: fadeInDown;">پیدا کردن ما</h2>
                    <p class="subtitle-des wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay=".5s" style="visibility: visible; animation-duration: 500ms; animation-delay: 0.5s; animation-name: fadeInDown;">
                        شما میتوانید آدرس و محل دقیق شرکت ما را در نقشه پیدا کنید.

                    </p>
                    <div class="map">
                        <iframe src="https://maps.google.com/maps?q=%DA%A9%D8%B1%D8%AC%20%D8%A7%D8%B5%D9%81%D9%87%D8%A7%D9%86%DB%8C%D9%87%D8%A7&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>

                    </div>
                </div>
            </div>
        </div>
        <div class="row address-details">
            <div class="col-lg-3 col-sm-6">
                <div class="address wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay=".3s" style="visibility: visible; animation-duration: 500ms; animation-delay: 0.3s; animation-name: fadeInLeft;">
                    <i class="ion-ios-location-outline"></i>
                    <h5>کرج اصفهانیها کوچه محمدی پلاک 87 واحد 2</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="address wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay=".5s" style="visibility: visible; animation-duration: 500ms; animation-delay: 0.5s; animation-name: fadeInLeft;">
                    <i class="ion-ios-eye-outline"></i>
                    <h5>دفتر خدمات الکترونیکی<br>پاورترانسکو</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="email wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay=".7s" style="visibility: visible; animation-duration: 500ms; animation-delay: 0.7s; animation-name: fadeInLeft;">
                    <i class="ion-ios-email-outline"></i>
                    <p>supmail.server@gmail.com</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="phone wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay=".9s" style="visibility: visible; animation-duration: 500ms; animation-delay: 0.9s; animation-name: fadeInLeft;">
                    <i class="ion-ios-telephone-outline"></i>
                    <p>+21 633 23 56</p>
                </div>
            </div>
        </div>
    </div>
</section>

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






@endsection
