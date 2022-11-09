@extends("layouts.main")

@section("Head-text")
    PowerTransco | Home
@endsection
@section("Head")

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <link rel="icon" href="/images/favicon.ico">
    <script type="text/javascript">
        window.onload(function (){
            document.getElementById("hederemun").hidden;
        });
    </script>



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

    </style>


@endsection

@section("Activator")
    <li><a href="/cp/brands" class="nav-link px-2 text-info">Add Brand</a></li>
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

@if($axx==true)
    <script>alert('Your Brand Successfully added!')</script>

@endif

@section("mainSection")
    <div class="ad-post bg-gray py-5">
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

            <form method="post" action="/cp/brands">
                @csrf
                <fieldset class="border border-gary p-4 mb-5">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="widget personal-info">
                                <form method="post" action="/cp/register-cat">
                                    <h3 class="widget-header user">اضافه کردن دسته بندی</h3>
                                    <!-- First Name -->
                                    <div class="form-group">
                                        <label><h6 for="first-name">عنوان :</h6></label>
                                        <input name="onvan" id="onvan" type="text" class="form-control" id="first-name">
                                    </div>

                                    <button type="submit" class="btn btn-transparent">ثبت</button>
                                </form>
                            </div>
                            <div class="widget personal-info">

                                <h3 class="widget-header user">ویرایش دسته بندی</h3>

                                <div id="ghaleb2" style="" class="btn-group w-100 mb-1">



                                    <label for="sel3"></label>
                                    <select id="sel3" class="custom-select" style="width: 31%;margin-right: 1px;" data-sortorder="">
                                        <option value="index">Templets</option>

                                        @foreach($cates as $ket)
                                            <option id="{{$ket["id"]}}" value="{{$ket['title']}}" data-filter="{{$ket['title']}}">{{$ket["title"]}}</option>
                                        @endforeach
                                    </select>



                                    <label style="display: none;" for="changeghaleb"></label>
                                    <input id="changeghaleb" type="text" msr="" value="" placeholder="Exists Name" class="radio form-control" style="width: 31%;display: none;margin-right: 2px;">


                                    <a id="backghaleb" style="display: none;margin-left: 1px;" class="btn btn-secondary" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"> Back </a>
                                    <a id="editghaleb" style="display: none;" class="btn btn-success" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"> Change </a>
                                    <a id="delghaleb" style="display: none;" class="btn btn-danger" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"> Delete </a>


                                </div>

                                <button type="submit" class="btn btn-transparent">ثبت</button>

                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="" style="
">
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
                                        <li><a href="/cp/ads"><i class="fa fa-bookmark-o"></i> Add Ad <span>{{count($ads)}}</span></a></li>
                                        <li><a href="/cp/cats"><i class="fa fa-file-archive-o"></i>Add Cat <span>{{count($cats)}}</span></a></li>
                                        <li class="active"><a href="/cp/brands"><i class="fa fa-file-archive-o"></i>Add Brand <span>{{count($cates)}}</span></a></li>
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
    </div>

@endsection


@section("Scripts")
    <!-- jquery -->
    <!-- jquery -->
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
        $(function () {
            $.ajaxSetup({
                headers: {'X-CSRF-Token': '{{csrf_token()}}'}
            });

            $('#photo').change(function () {
                var photo = $(this)[0].files[0];
                var formData = new FormData();

                formData.append('photo', photo);
                formData.append('onvan', $('#onvan').val());

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
                    url: '/cp/brand_p/',
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

    <script>

    </script>
    <script>
        $(document).ready(function() {
            $("#myModal");
        });

        $('#newadder').click(function () {

            let pho = $('#newcat').val();


            let formData = new FormData();
            formData.append('newcat', pho);
            $.ajaxSetup({
                headers: {'X-CSRF-Token': '{{csrf_token()}}'}
            });

            $.ajax({
                url: '/cp/add',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {
                    alert(res['curl']);
                    return location.reload();
                    //alert(JSON.stringify(res));
                    //alert("Your Category is Successfully Added!");
                },
                error: function (zew) {
                    alert(zew['curl']);
                    return location.reload();
                }
            })
        })

    </script>
    <script>

        $('#sel3').change(function() {
            let chgh=$('#changeghaleb');
            let sell3=$("#sel3 :selected");
            sell3.attr('selected','');
            $('#textkosher').hide();
            $('#selecter2').hide();
            chgh.attr('value',sell3.text());
            chgh.attr('msr',sell3.attr('msri'));
            chgh.show();
            $('#sel3').hide();
            $('#backghaleb').show();
            $('#editghaleb').show();
            $('#delghaleb').show();

        });

        $('#selectcate2').change(function() {
            let chgh0=$("#changeghaleb2");
            let sell2=$("#selectcate2 :selected");
            $('#textkosher2').hide();
            $('#selectcate2').hide();
            chgh0.show();
            chgh0.val(sell2.text());
            chgh0.attr('jash',sell2.val());
            chgh0.attr('msr',sell2.attr('msri'));
            $('#backghaleb2').show();
            $('#editghaleb2').show();
            $('#delghaleb2').show();

        });


        $('#backghaleb').click(function () {
            $('#changeghaleb').hide();
            $('#backghaleb').hide();
            $('#editghaleb').hide();
            $('#delghaleb').hide();
            $('#textkosher').show();
            $('#sel3').show();
            $('#selecter2').show();

        });

        $('#backghaleb2').click(function () {
            $('#changeghaleb2').hide();
            $('#backghaleb2').hide();
            $('#editghaleb2').hide();
            $('#delghaleb2').hide();
            $('#textkosher2').show();
            $('#selectcate2').show();

        });



        $('#selecter2').change(function () {
            let telin = $("#sel3 option");
            let cating = $('#selecter2 :selected');
            telin.show();
            if (cating.val()==="index"){
                telin.show();
            }else{
                if(cating){
                    $("#sel3 option[data-filter!=" + cating.text() + "]").hide();
                }else{
                    telin.show();
                }
            }

        });

    </script>
    <script>
        $('#editghaleb').click(function(event){
            event.preventDefault();
            $.ajaxSetup({
                headers: {'X-CSRF-Token': '{{csrf_token()}}'}
            });
            $.ajax({
                url: "/cp/bnd",
                type:"POST",
                data:{
                    "changeghaleb":$('#changeghaleb').val(),
                    "jash":$('#sel3 :selected').attr('id'),
                },
                success:function() {
                    alert('Success Your Template Name is Changed!')
                    location.reload();
                    //console.log(response);

                },
            });
        });


        $('#delghaleb').click(function(event){
            event.preventDefault();
            let sil3=$('#sel3 :selected');
            $.ajax({
                url: "/cp/add",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    "delghaleb":sil3.attr('id'),
                    "masiri":sil3.attr('msri')
                },
                success:function() {
                    alert('Success Your Template is Deleted!')
                    location.reload();
                    //console.log(response);

                },
            });
        });

        $('#editghaleb2').click(function(event){
            event.preventDefault();
            let cvb2=$('#changeghaleb2');

            $.ajax({
                url: "/cp/add",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    "changeghaleb2":cvb2.val(),
                    "jash2":$('#selectcate2 :selected').val(),
                },
                success: function (res) {
                    alert(res['curl']);
                    return location.reload();
                    //alert(JSON.stringify(res));
                    //alert("Your Category is Successfully Added!");
                },
                error: function (zew) {
                    alert(zew['curl']);
                    return location.reload();
                }
            });
        });

        $('#delghaleb2').click(function(event){
            event.preventDefault();


            $.ajax({
                url: "/cp/add",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    "delghaleb2":$('#changeghaleb2').attr('jash'),
                },
                success:function() {
                    alert('Success Your Category is Deleted!')
                    location.reload();
                    //console.log(response);

                },
            });
        });




    </script>

@endsection

