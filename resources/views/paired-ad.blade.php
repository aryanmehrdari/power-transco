@extends("layouts.main")

@section("Head-text")
    PowerTransco | تکمیل فرآیند
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


    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style type="text/css">

        body
        {
            background:#f2f2f2;
        }

        .payment
        {
            border:1px solid #f2f2f2;
            height:280px;
            border-radius:20px;
            background:#fff;
        }
        .payment_header
        {
            background:green;
            padding:20px;
            border-radius:20px 20px 0px 0px;

        }

        .payment_header2
        {
            background:red;
            padding:20px;
            border-radius:20px 20px 0px 0px;

        }

        .payment_header3
        {
            background:gray;
            padding:20px;
            border-radius:20px 20px 0px 0px;

        }

        .check
        {
            margin:0px auto;
            width:50px;
            height:50px;
            border-radius:100%;
            background:#fff;
            text-align:center;
        }

        .check i
        {
            vertical-align:middle;
            line-height:50px;
            font-size:30px;
        }

        .content
        {
            text-align:center;
        }

        .content  h1
        {
            font-size:25px;
            padding-top:25px;
        }

        .content a
        {
            width:200px;
            height:35px;
            color:#fff;
            border-radius:30px;
            padding:5px 10px;
            background:greenyellow;
            transition:all ease-in-out 0.3s;
        }

        .content2 a
        {
            width:200px;
            height:35px;
            color:#fff;
            border-radius:30px;
            padding:5px 10px;
            background:red;
            transition:all ease-in-out 0.3s;
        }

        .content3 a
        {
            width:200px;
            height:35px;
            color:#fff;
            border-radius:30px;
            padding:5px 10px;
            background:gray;
            transition:all ease-in-out 0.3s;
        }

        .content a:hover
        {
            text-decoration:none;
            background:#000;
        }

    </style





@endsection

@section("Activator")

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

    <section class="section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    @if($result=="0")
                    <div class="container">
                        <meta http-equiv="refresh" content="10;url=/">
                        <div class="row">
                            <div class="col-md-6 mx-auto mt-5">
                                <div class="payment">
                                    <div class="payment_header3">
                                        <div class="check"><i style="color: gray;" class="fa fa-refresh" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="content3">
                                        <h1 class="text">لطفا صبر کنید...</h1>
                                        <p>تا چند ثانیه دیگر به صفحه پرداخت هدایت می شوید.</p>
                                        <a href="/">صفحه اصلی</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    @endif
                    @if($result=="1")
                    <div class="container">
                        <meta http-equiv="refresh" content="10;url=/">
                        <div class="row">
                            <div class="col-md-6 mx-auto mt-5">
                                <div class="payment">
                                    <div class="payment_header">
                                        <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="content">
                                        <h1 class="text">! خرید شما با موفقیت انجام شد</h1>
                                        <p>پس از 10 ثانیه به صفحه اصلی منتقل میشوید برای مشاهده وضعیت خریدتان به پنل کاربری مراجعه فرمایید یا با کلیک روی دکمه زیر به صفحه اصلی هدایت شوید</p>
                                        <a href="/">صفحه اصلی</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>@endif
                        @if($result=="2")
                    <div class="container">
                        <meta http-equiv="refresh" content="10;url=/">
                        <div class="row">
                            <div class="col-md-6 mx-auto mt-5">
                                <div class="payment">
                                    <div class="payment_header2">
                                        <div class="check"><i style="color: red;" class="fa fa-close" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="content2">
                                        <h1 class="text">! خرید شما انجام نشد</h1>
                                        <p>پس از 10 ثانیه به صفحه اصلی منتقل میشوید برای مشاهده وضعیت خریدتان به پنل کاربری مراجعه فرمایید یا با کلیک روی دکمه زیر به صفحه اصلی هدایت شوید</p>
                                        <a href="/">صفحه اصلی</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                            @endif

                </div>
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
