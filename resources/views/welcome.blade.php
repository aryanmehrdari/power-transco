@extends("layouts.main")

@section("Head-text")
    PowerTransco | خانه
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
@if($root==true)
    <script>alert('Your Account Successfully Deleted!')</script>
@endif
@section("Activator")
    @if(\Illuminate\Support\Facades\Auth::user())
        <li><a class="fa" href="{{\Illuminate\Support\Facades\Auth::user()?'/buy':'/login'}}" style="font-size:24px;color: white;">&#xf07a;</a>
            <span class='badge badge-warning' id='lblCartCount'>{{$dum}}</span></li>
    @endif
<li><a href="/" class="nav-link px-2 text-info">خانه</a></li>
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

    <section id="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="block wow fadeInUp animated" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">

                        <!-- Slider -->
                        <section class="cd-intro">
                            <h1 class="wow fadeInUp animated cd-headline slide animated" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                                <span>ابزار و وسایل الکترونیکی پاورترانسکو</span>
                            </h1>
                        </section> <!-- cd-intro -->
                        <!-- /.slider -->
                        <h2 class="wow fadeInUp animated animated" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                            با ما راحتی در خرید هرگونه وسایل الکترونیکی را تجربه کنید.<br> گروه خدمات الکترونیکی پاورترانسکو
                        </h2>
                        <a class="btn-lines dark light wow fadeInUp animated btn btn-default btn-green hvr-bounce-to-right animated" data-wow-delay=".9s" href="/product" target="_blank" style="visibility: hidden; animation-delay: 0.9s; animation-name: none;">محصولات</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-sm">
        <div class="container">


            <div class="row justify-content-center" dir="ltr">

                <section id="about">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="block wow fadeInLeft animated animated animated animated animated" data-wow-delay=".3s" data-wow-duration="500ms" style="visibility: hidden; animation-duration: 500ms; animation-delay: 0.3s; animation-name: none;">
                                    <h2 style="direction: rtl;">
                                        درباره ما
                                    </h2>
                                    <p style="direction: rtl;">
                                        شرکت ما در زمینه ابزار آلات و ماشین های صنعتی از سال 1399 تا به امروز توانسته استاندارد بین المللی ISO-2001 در زمینه مشاغل الکترونیک کسب کرده و در تلاش است تا بهترین خدمات را نزد مشتریان ارایه دهد.
                                    </p>
                                    <p style="direction: rtl;">
                                        ازین پس ما تصمیم بر این گرفته ایم تا با پشتکار و پشتوانه ای استوار بر فراز قله ی موفقیت ها گام بگذاریم و در کنار مشتریان عزیزمان باشیم. این سایت به شما و ما کمک میکند تا راحت تر بایکدیگر تعامل کنیم.
                                    </p>
                                </div>

                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="block wow fadeInRight animated animated animated animated animated" data-wow-delay=".3s" data-wow-duration="500ms" style="visibility: hidden; animation-duration: 500ms; animation-delay: 0.3s; animation-name: none;">
                                    <img src="/images/about/about.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="works" class="works">
                    <div class="container">
                        <div class="section-heading">
                            <h1 class="title wow fadeInDown animated animated animated animated animated" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">لیست برند های موجود</h1>
                            <p class="wow fadeInDown animated animated animated animated animated" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                                محصولات ما در قالب برند های زیر آماده به ارایه میباشد<br> تمامی محصولات الکتریکی از جمله یوپی اس ها شامل برند های زیر میباشند.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <figure class="wow fadeInLeft animated portfolio-item animated animated animated animated animated" data-wow-duration="500ms" data-wow-delay="0ms" style="visibility: hidden; animation-duration: 500ms; animation-delay: 0ms; animation-name: none;">
                                    <div class="img-wrapper">
                                        <img src="/images/portfolio/item-1.jpg" class="img-fluid img-responsive" alt="this is a title">
                                        <div class="overlay">
                                            <div class="buttons">
                                                <a rel="gallery" class="fancybox" href="/images/portfolio/item-1.jpg">مشاهده</a>

                                            </div>
                                        </div>
                                    </div>
                                    <figcaption>
                                        <h4>
                                            <a href="#">
                                                Schneider Electric
                                            </a>
                                        </h4>
                                        <p>
                                            یو پی اس و ترانس
                                        </p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <figure class="wow fadeInLeft animated animated animated animated animated animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: hidden; animation-duration: 500ms; animation-delay: 300ms; animation-name: none;">
                                    <div class="img-wrapper">
                                        <img src="images/portfolio/item-2.jpg" class="img-fluid" alt="this is a title">
                                        <div class="overlay">
                                            <div class="buttons">
                                                <a rel="gallery" class="fancybox" href="images/portfolio/item-2.jpg">مشاهده</a>

                                            </div>
                                        </div>
                                    </div>
                                    <figcaption>
                                        <h4>
                                            <a href="#">
                                                Eaton Corporation Inc
                                            </a>
                                        </h4>
                                        <p>
                                            یو پی اس
                                        </p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <figure class="wow fadeInLeft animated animated animated animated animated animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: hidden; animation-duration: 500ms; animation-delay: 300ms; animation-name: none;">
                                    <div class="img-wrapper">
                                        <img src="images/portfolio/item-3.jpg" class="img-fluid" alt="">
                                        <div class="overlay">
                                            <div class="buttons">
                                                <a rel="gallery" class="fancybox" href="images/portfolio/item-3.jpg">مشاهده</a>

                                            </div>
                                        </div>
                                    </div>
                                    <figcaption>
                                        <h4>
                                            <a href="#">
                                                Vertiv Group Corp
                                            </a>
                                        </h4>
                                        <p>
                                            لوازم الکترونیکی و یو پی اس
                                        </p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <figure class="wow fadeInLeft animated animated animated animated animated animated" data-wow-duration="500ms" data-wow-delay="600ms" style="visibility: hidden; animation-duration: 500ms; animation-delay: 600ms; animation-name: none;">
                                    <div class="img-wrapper">
                                        <img src="images/portfolio/item-4.jpg" class="img-fluid" alt="">
                                        <div class="overlay">
                                            <div class="buttons">
                                                <a rel="gallery" class="fancybox" href="images/portfolio/item-4.jpg">مشاهده</a>

                                            </div>
                                        </div>
                                    </div>
                                    <figcaption>
                                        <h4>
                                            <a href="#">
                                                Huawei
                                            </a>
                                        </h4>
                                        <p>
                                            لوازم الکترونیکی و یو پی اس
                                        </p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <figure class="wow fadeInLeft animated animated animated animated animated animated" data-wow-duration="500ms" data-wow-delay="900ms" style="visibility: hidden; animation-duration: 500ms; animation-delay: 900ms; animation-name: none;">
                                    <div class="img-wrapper">
                                        <img src="images/portfolio/item-5.jpg" class="img-fluid" alt="">
                                        <div class="overlay">
                                            <div class="buttons">
                                                <a rel="gallery" class="fancybox" href="images/portfolio/item-5.jpg">مشاهده</a>

                                            </div>
                                        </div>
                                    </div>
                                    <figcaption>
                                        <h4>
                                            <a href="#">
                                                Riello
                                            </a>
                                        </h4>
                                        <p>
                                            یو پی اس
                                        </p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <figure class="wow fadeInLeft animated animated animated animated animated animated" data-wow-duration="500ms" data-wow-delay="1200ms" style="visibility: hidden; animation-duration: 500ms; animation-delay: 1200ms; animation-name: none;">
                                    <div class="img-wrapper">
                                        <img src="images/portfolio/item-6.jpg" class="img-fluid" alt="">
                                        <div class="overlay">
                                            <div class="buttons">
                                                <a rel="gallery" class="fancybox" href="images/portfolio/item-6.jpg">مشاهده</a>

                                            </div>
                                        </div>
                                    </div>
                                    <figcaption>
                                        <h4>
                                            <a href="#">
                                                Toshiba
                                            </a>
                                        </h4>
                                        <p>
                                            لوازم الکترونیکی و یو پی اس
                                        </p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="feature">
                    <div class="container">
                        <div class="section-heading">
                            <h1 class="title wow fadeInDown animated animated animated animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s;">بیشتر بدانید</h1>
                            <p class="wow fadeInDown animated animated animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                                اصول وقوانینی که ما بر آن پایبندیم<br>همگی باعث میشود تا ما بتوانیم بهترین خدمات را برای شما فراهم کنیم.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <div class="media wow fadeInUp animated animated animated animated animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms;">
                                    <div class="media-left">
                                        <div class="icon">
                                            <i class="ion-ios-flask-outline"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">همکاری</h4>
                                        <p>همکاری در بین کارکنان ما اولین اولویت است</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="media wow fadeInDown animated animated animated animated animated" data-wow-duration="500ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 600ms;">
                                    <div class="media-left">
                                        <div class="icon">
                                            <i class="ion-ios-lightbulb-outline"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">پرداخت چکی</h4>
                                        <p>شما میتوانید با استفاده از چک معتبر خرید های خود را انجام دهید.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="media wow fadeInDown animated animated animated animated animated" data-wow-duration="500ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 900ms;">
                                    <div class="media-left">
                                        <div class="icon">
                                            <i class="ion-ios-lightbulb-outline"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">نقد واقساط</h4>
                                        <p>شما میتوانید به صورت نقدی وقسطی تمامی خرید های خود را انجام دهید.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="media wow fadeInDown animated animated animated animated animated" data-wow-duration="500ms" data-wow-delay="1200ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 1200ms;">
                                    <div class="media-left">
                                        <div class="icon">
                                            <i class="ion-ios-americanfootball-outline"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">سریع و بصرفه</h4>
                                        <p>تمامی خرید های شما عزیزان در اصرع ووقت و زمان اعلام شده به دستتان میرسد.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="media wow fadeInDown animated animated animated animated animated" data-wow-duration="500ms" data-wow-delay="1500ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 1500ms;">
                                    <div class="media-left">
                                        <div class="icon">
                                            <i class="ion-ios-keypad-outline"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">پشتیبانی</h4>
                                        <p>پشتیبانی 12 ساعته از تمامی خدمات و کالا های مورد نظر.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="media wow fadeInDown animated animated animated animated animated" data-wow-duration="500ms" data-wow-delay="1800ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 1800ms;">
                                    <div class="media-left">
                                        <div class="icon">
                                            <i class="ion-ios-barcode-outline"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">خدمات پس از فروش</h4>
                                        <p>شما میتوانید بعد از خرید از خدمات پس از فروش ما استفاده کنید.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

        </div>

    </section>

@endsection


@section("Scripts")

    <script src="/plugins/jQurey/jquery.min.js"></script>
    <!-- Form Validation -->
    <script src="/plugins/form-validation/jquery.form.js"></script>
    <script src="/plugins/form-validation/jquery.validate.min.js"></script>
    <!-- slick slider -->
    <script src="/plugins/slick/slick.min.js"></script>
    <!-- bootstrap js -->
    <script src="/plugins/bootstrap/bootstrap.min.js"></script>


    <script src="/plugins/wow-js/wow.min.js"></script>

    <script src="/plugins/slider/slider.js"></script>

    <script src="/js/app.js"></script>

    <script src="/plugins/facncybox/jquery.fancybox.js"></script>

    <script src="/js/main.js"></script>
    <!--script src="/js/bootstrap.bundle.min.js"></script-->



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




