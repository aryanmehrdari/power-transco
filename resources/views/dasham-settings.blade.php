@extends("layouts.main")

@section("Head-text")
    PowerTransco | Edit Profile
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



@if($result==true)
<script>alert('Your Profile Successfully changed!')</script>
@endif
@section("mainSection")




    <section class="ad-post bg-gray py-5">
        <div class="container">

            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">حذف حساب کاربری</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            آیا واقعا میخواهید حساب کاربری خود را حذف کنید؟
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">خیر</button>
                            <form id="felete" method="post" action="/delete-acc?id={{\Illuminate\Support\Facades\Auth::user()->id}}">
                                @csrf
                                <button id="deletebtn" type="submit" class="btn btn-primary" href="">بله</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


                <fieldset class="border border-gary p-4 mb-5">
                    <div class="row">
                        <div class="bg-secondary col-md-10 offset-md-1 col-lg-8 offset-lg-0">
                            <br>
                            <div class="col-lg-12">

                                <div style="display: flex;">
                                    <input cdr="{{$ads->id}}" value="" type="hidden" id="image_path" name="image_path">
                                    <input value="{{time()}}" type="hidden" id="tmp_path" name="tmp_path">

                                    <div style="display: flex;">
                                        <div class="uphoto">
                                            <img class="imgPreview img img-circle" width="80" src="/user-photos/{{$ads->user_image}}">
                                            <input class="photo" style="background: white;" name="photo" id="photo" type="file">
                                        </div>

                                    </div>
                                </div>
                                <br>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100">

                                    </div>
                                </div>


                            </div>
                            <form method="post" action="{{\Illuminate\Support\Facades\Auth::user()->is_admin==1?'/cp/edit_profile':'/home'}}">
                                @csrf
                                <input value="{{$ads->id}}" type="hidden" id="user_id" name="user_id">

                            <div class="col-lg-12">
                                <h6 style="color: white;" class="font-weight-bold pt-4 pb-1">نام :</h6>
                                <input name="name" value="{{$ads->name}}" id="name" type="text" class="border w-100 p-2 bg-white text-capitalize" placeholder="نام">

                                <h6 style="color: white;" class="font-weight-bold pt-4 pb-1">ایمیل :</h6>
                                <input name="email" value="{{$ads->email}}" id="email" class="border p-3 w-100" placeholder="ایمیل">

                                <h6 style="color: white;" class="font-weight-bold pt-4 pb-1">شهر :</h6>
                                <input name="city" value="{{$ads->city}}" id="city" class="border p-3 w-100" placeholder="شهر">

                                <h6 style="color: white;" class="font-weight-bold pt-4 pb-1">تلفن :</h6>
                                <input name="phone" value="{{$ads->phone}}" id="phone" class="border p-3 w-100" placeholder="تلفن">

                                <h6 style="color: white;" class="font-weight-bold pt-4 pb-1">آدرس :</h6>
                                <textarea name="address" rows="7" id="address" class="border p-3 w-100" placeholder="آدرس">{{$ads->address}}</textarea>

                            </div>
                            <button type="submit" class="col-3 container-fluid btn btn-primary d-block mt-2" style="
    margin-bottom: 2%;
">ثبت</button>
                            </form>

                        </div>

                        <div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
                            <div class="sidebar">

                                <div class="widget user-dashboard-profile">

                                    <div class="profile-thumb">
                                        <img src="/user-photos/{{\Illuminate\Support\Facades\Auth::user()->user_image}}" alt="" class="rounded-circle">
                                    </div>

                                    <h5 class="text-center">{{\Illuminate\Support\Facades\Auth::user()->name}}</h5>
                                    <p>Joined {{\Carbon\Carbon::parse(\Illuminate\Support\Facades\Auth::user()->created_at)->format('Y-m-d')}}</p>
                                    <a href="/cp/edit_profile" class="btn btn-main-sm">پنل کاربری</a>
                                </div>

                                @if(\Illuminate\Support\Facades\Auth::user()->is_admin==1)
                                <div class="widget user-dashboard-menu">
                                    <ul>
                                        <li><a href="/cp/dashboard"><i class="fa fa-user"></i> My Ads</a></li>
                                        <li><a href="/cp/ads"><i class="fa fa-bookmark-o"></i> Add Ad <span>{{count(\App\Models\Ad::all()->toArray())}}</span></a></li>
                                        <li><a href="/cp/cats"><i class="fa fa-file-archive-o"></i>Add Cat <span>{{count(\App\Models\Cats::all()->toArray())}}</span></a></li>
                                        <li><a href="/cp/brands"><i class="fa fa-file-archive-o"></i>Add Brand <span>{{count(\App\Models\City::all()->toArray())}}</span></a></li>
                                        <li><a href="/cp/users"><i class="fa fa-bolt"></i> Users<span>{{count(\App\Models\User::all()->toArray())}}</span></a></li>
                                        <li><a data-toggle="modal" data-target="#exampleModal2" data-placement="top"><i class="fa fa-power-off"></i>Delete
                                                Account</a></li>
                                    </ul>
                                </div>
                                @endif



                                <div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header border-bottom-0">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <img src="images/account/Account1.png" class="img-fluid mb-2" alt="">
                                                <h6 class="py-2">Are you sure you want to delete your account?</h6>
                                                <p>Do you really want to delete these records? This process cannot be undone.</p>
                                                <textarea name="message" id="" cols="40" rows="4" class="w-100 rounded"></textarea>
                                            </div>
                                            <div class="modal-footer border-top-0 mb-3 mx-5 justify-content-lg-between justify-content-center">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </fieldset>

        </div>
    </section>

@endsection

@section('Scripts')
    <script src="/plugins/jQurey/jquery.min.js"></script>
    <script src="/cdnjs/util.js"></script>
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

        $('#photo').change(function () {
            var photo = $(this)[0].files[0];
            var photo_2 = $('#image_path').attr('cdr');
            var formData = new FormData();

            formData.append('photo', photo);
            formData.append('user_id', photo_2);

            $.ajaxSetup({
                headers: {'X-CSRF-Token': '{{csrf_token()}}'}
            });

            $.ajax({
                xhr: function () {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function (evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = evt.loaded / evt.total;
                            percentComplete = parseInt(percentComplete * 100);
                            console.log(percentComplete);
                            $('.progress-bar').css('width', percentComplete + '%');
                            if (percentComplete === 100) {
                                console.log('completed 100%')

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
                url: '/home',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success : function(msg) {
                    alert(msg);
                },
                error: function(msg)
                {
                    alert(JSON.stringify(msg));
                    alert('Error Occured'); //MESSAGE
                }
            })
        });
    </script>

    <script type="text/javascript">

        $('#form1').on('submit',function(event){
            event.preventDefault();


            $.ajax({
                url: "/cp/success",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    "image_path":$('#image_path').val(),
                    "listi":$('#listi').val(),
                    "cio":$('#cio').val(),
                },
                success:function(response) {
                    alert('Success Your file is Uploaded!')
                    location.reload();
                    //console.log(response);

                },
            });
        });

    </script>
    <script>
        $("#cio").on("change paste keyup", function() {
            $('#filex').hide();
        });
    </script>


@endsection


