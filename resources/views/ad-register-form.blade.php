@extends("layouts.main")

@section("Head-text")
    PowerTransco | Prudocts
@endsection
@section("Head")



    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICON -->
    <link href="/img/favicon.png" rel="shortcut icon">
    <!-- PLUGINS CSS STYLE -->
    <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/plugins-1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/plugins-1/bootstrap/css/bootstrap-slider.css">
    <!-- Font Awesome -->
    <link href="/plugins-1/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="/plugins-1/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="/plugins-1/slick-carousel/slick/slick-theme.css" rel="stylesheet">
    <!-- Fancy Box -->
    <link href="/plugins-1/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
    <link href="/plugins-1/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="/css-1/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/headers.css">


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

    </style>


@endsection

@section("Activator")
    <li><a href="/cp/ads" class="nav-link px-2 text-info">Add Ad</a></li>
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
                Search
            </button>
        </form>

    </div>


    <div class="row justify-content-center">

        <form id="myfrm" method="POST" class="nav col-12 mt-1 mb-2" style="">
            @csrf
            @if(\Illuminate\Support\Facades\Auth::user())
                <a type="button" onclick="$('#myfrm').attr('action','/logout').submit();" class="col-6 btn btn-outline-danger text-gray-200">Logout</a>
            @else
                <a type="button" class="col-6 btn btn-outline-warning" href="/login">Login</a>
            @endif

            @if(\Illuminate\Support\Facades\Auth::user())
                <a href="{{\Illuminate\Support\Facades\Auth::user()->is_admin==1?'/cp/dashboard/':'/home'}}" type="button" class="col-6 btn btn-outline-success">Dashboard</a>
            @else
                <a type="button" class="col-6 btn btn-outline-info" href="/register">Register</a>
            @endif
        </form>
    </div>
@endsection

@if($result==true)
    <script>alert('Your Ad Successfully added!')</script>

@endif
@if($result=='1')
    <script>alert('Your Ad Successfully Changed!')</script>

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

        <form method="post" action="/cp/ads">
            @csrf

            <fieldset class="border border-gary p-4 mb-5">
                <div class="row">
                    <div class="bg-secondary col-md-10 offset-md-1 col-lg-8 offset-lg-0">
                        <br>


                    <div class="col-lg-12">
                        <h3 style="color: white;">اضافه کردن محصول</h3>
                    </div>

                        <input cdr="{{time()}}" value="" type="hidden" id="image_path" name="image_path">
                        <input value="{{time()}}" type="hidden" id="tmp_path" name="tmp_path">

                        <div style="display: flex;">
                            <div class="uphoto">
                                <img class="imgPreview img img-circle" width="80" src="/images/uppic.png">
                                <input class="photo" style="background: white;" name="photo" id="photo" type="file">
                            </div>

                        </div>

                        <br>

                        <div style="display: flex;">
                            <div class="uphoto">
                                <img class="imgPreview_1 img img-circle" width="80" src="/images/uppic.png">
                                <input class="photo" style="background: white;" name="photo" id="photo_1" type="file">
                            </div>
                        </div>

                        <br>

                        <div style="display: flex;">
                            <div class="uphoto">
                                <img class="imgPreview_2 img img-circle" width="80" src="/images/uppic.png">
                                <input class="photo" style="background: white;" name="photo" id="photo_2" type="file">
                            </div>
                        </div>

                        <br>

                        <div style="display: flex;">
                            <div class="uphoto">
                                <img class="imgPreview_3 img img-circle" width="80" src="/images/uppic.png">
                                <input class="photo" style="background: white;" name="photo" id="photo_3" type="file">
                            </div>
                        </div>

                        <br>

                        <div style="display: flex;">
                            <div class="uphoto">
                                <img class="imgPreview_4 img img-circle" width="80" src="/images/uppic.png">
                                <input class="photo" style="background: white;" name="photo" id="photo_4" type="file">
                            </div>
                        </div>

                        <br>

                        <div class="progress" style="
    margin-bottom: 0%;
">
                            <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100">

                            </div>
                        </div>

                        <br>

                        <h6 class="font-weight-bold pt-4 pb-1" style="color: white;">عنوان :</h6>
                        <input name="ad_title" type="text" class="border w-100 p-2 bg-white text-capitalize" placeholder="عنوان">


                        <h6 class="font-weight-bold pt-4 pb-1" style="color: white;">وضعیت :</h6>
                        <div class="row px-3">
                            <div class="col-lg-4 mr-lg-4 my-2 rounded bg-white">
                                <input type="radio" name="mojudi" value="0" id="mojud">
                                <label for="personal" class="py-2">موجود :</label>
                            </div>
                            <div class="col-lg-4 mr-lg-4 my-2 rounded bg-white ">
                                <input type="radio" name="mojudi" value="1" id="namoj">
                                <label for="business" class="py-2">نا موجود</label>
                            </div>
                        </div>
                        <h6 class="font-weight-bold pt-4 pb-1" style="color: white;">توضیحات :</h6>
                        <textarea name="ad_text_content" id="" class="border p-3 w-100" rows="7" placeholder="Write details about your product"></textarea>
                        <h6 class="font-weight-bold pt-4 pb-1" style="color: white;">نوع محصول و شرکت محصول :</h6>
                        <select style="background: white;" class="form-control" name="ad_city_id">
                            <option value="0">انتخاب برند</option>
                            @foreach($cities as $cit)
                                <option value="{{$cit["id"]}}">{{$cit["title"]}}</option>
                            @endforeach
                        </select>
                        <br>
                        <br>
                        <select style="background: white;" class="form-control" name="ad_cat_id">
                            <option value="0">انتخاب دسته بندی</option>
                            @foreach($cats as $ket)
                                <option value="{{$ket["id"]}}">{{$ket["cat"]}}</option>
                            @endforeach
                        </select>

                        <div class="price">

                            <div class="row px-3" style="margin-top: 1%;">
                                <h6 class="col-3 font-weight-bold pt-4 pb-1" style="top: 0%;margin-top: -1%;color: white;">قیمت :</h6>
                                <input type="number" placeholder="قیمت" name="price" class="col-9 border border-0 py-2 w-100 price" placeholder="Price" id="price" style="margin-top: 1%;">
                            </div>
                        </div>
                        <button type="submit" class="container-fluid btn btn-primary d-block mt-2" style="
    margin-bottom: 2%;
">ثبت</button>

                    </div>
                    <div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
                        <div class="sidebar">
                            <!-- User Widget -->
                            <div class="widget user-dashboard-profile">
                                <!-- User Image -->
                                <div class="profile-thumb">
                                    <img src="/user-photos/{{\Illuminate\Support\Facades\Auth::user()->user_image}}" alt="" class="rounded-circle">
                                </div>
                                <!-- User Name -->
                                <h5 class="text-center">{{\Illuminate\Support\Facades\Auth::user()->name}}</h5>
                                <p>Joined {{\Carbon\Carbon::parse(\Illuminate\Support\Facades\Auth::user()->created_at)->format('Y-m-d')}}</p>
                                <a href="/cp/edit_profile" class="btn btn-main-sm">پنل کاربری</a>
                            </div>
                            <!-- Dashboard Links -->
                            <div class="widget user-dashboard-menu">
                                <ul>
                                    <li><a href="/cp/dashboard"><i class="fa fa-user"></i> My Ads</a></li>
                                    <li class="active"><a href="/cp/ads"><i class="fa fa-bookmark-o"></i> Add Ad <span>{{count($ads)}}</span></a></li>
                                    <li><a href="/cp/cats"><i class="fa fa-file-archive-o"></i>Add Cat <span>{{count($cats)}}</span></a></li>
                                    <li><a href="/cp/brands"><i class="fa fa-file-archive-o"></i>Add Brand <span>{{count($cities)}}</span></a></li>
                                    <li><a href="/cp/users"><i class="fa fa-bolt"></i> Users<span>{{count($usari)}}</span></a></li>
                                    <li><a data-toggle="modal" data-target="#exampleModal2" data-placement="top"><i class="fa fa-power-off"></i>Delete
                                            Account</a></li>
                                </ul>
                            </div>

                            <!-- delete-account modal -->
                            <!-- delete account popup modal start-->
                            <!-- Modal -->
                            <div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header border-bottom-0">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img src="/images/account/Account1.png" class="img-fluid mb-2" alt="">
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
                            <!-- delete account popup modal end-->
                            <!-- delete-account modal -->

                        </div>
                    </div>
                </div>





            </fieldset>
            </form>

    </div>


</section>

@endsection

@section("Scripts")
    <!-- jquery -->
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


        $(function () {
            $.ajaxSetup({
                headers: {'X-CSRF-Token': '{{csrf_token()}}'}
            });

            $('#photo').change(function () {
                var photo = $(this)[0].files[0];
                var photo_2 = $('#image_path').attr('cdr');
                var formData = new FormData();

                formData.append('photo', photo);
                formData.append('photo_2', photo_2);

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
                    url: '/cp/ads_p',
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
            });

            $('#photo_1').change(function () {
                var photo = $(this)[0].files[0];
                var photo_2 = $('#image_path').attr('cdr');
                var formData = new FormData();

                formData.append('photo', photo);
                formData.append('photo_2', photo_2);

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
                                    $('.imgPreview_1').attr('src', imageUrl);
                                    setTimeout(function () {
                                        $('.progress-bar').css('width', '0%');
                                    }, 2000)
                                }
                            }
                        }, false);
                        return xhr;
                    },
                    url: '/cp/ads_p',
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
            });

            $('#photo_2').change(function () {
                var photo = $(this)[0].files[0];
                var photo_2 = $('#image_path').attr('cdr');
                var formData = new FormData();

                formData.append('photo', photo);
                formData.append('photo_2', photo_2);

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
                                    $('.imgPreview_2').attr('src', imageUrl);
                                    setTimeout(function () {
                                        $('.progress-bar').css('width', '0%');
                                    }, 2000)
                                }
                            }
                        }, false);
                        return xhr;
                    },
                    url: '/cp/ads_p',
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

            $('#photo_3').change(function () {
                var photo = $(this)[0].files[0];
                var photo_2 = $('#image_path').attr('cdr');
                var formData = new FormData();

                formData.append('photo', photo);
                formData.append('photo_2', photo_2);

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
                                    $('.imgPreview_3').attr('src', imageUrl);
                                    setTimeout(function () {
                                        $('.progress-bar').css('width', '0%');
                                    }, 2000)
                                }
                            }
                        }, false);
                        return xhr;
                    },
                    url: '/cp/ads_p',
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

            $('#photo_4').change(function () {
                var photo = $(this)[0].files[0];
                var photo_2 = $('#image_path').attr('cdr');
                var formData = new FormData();

                formData.append('photo', photo);
                formData.append('photo_2', photo_2);

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
                                    $('.imgPreview_4').attr('src', imageUrl);
                                    setTimeout(function () {
                                        $('.progress-bar').css('width', '0%');
                                    }, 2000)
                                }
                            }
                        }, false);
                        return xhr;
                    },
                    url: '/cp/ads_p',
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
