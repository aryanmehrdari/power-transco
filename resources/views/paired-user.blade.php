@extends("layouts.main")

@section("Head-text")
    PowerTransco | حرید های من
@endsection
@section("Head")



    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="/assets/admin/plugins/fontawesome-free/css/all.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="/assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/assets/admin/dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="/assets/admin/dist/css/fontawsome.css">

        <link rel="stylesheet" href="/assets/admin/dist/css/googlefont.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="/assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="/assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="/assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


        <!-- Ekko Lightbox -->
        <link rel="stylesheet" href="/assets/admin/plugins/ekko-lightbox/ekko-lightbox.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="/assets/admin/dist/css/ionicons.min.css">






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
    <li><a href="/cp/users" class="nav-link px-2 text-info">خرید ها</a></li>
    <li><a href="/" class="nav-link px-2 text-white">خانه</a></li>
    <li><a href="/product" class="nav-link px-2 text-white">محصولات</a></li>
    <li><a href="/contact" class="nav-link px-2 text-white">درباره ما</a></li>
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

@section('mainSection')
<div class="row">



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




    <form id="catCreateForm" class="p-2 col-9">
        {{csrf_field()}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="text card-title">لیست خرید ها</h3>
                        </div>

                        <div class="card-header">
                            <h3 class="text-right">{{$jam}} :جمع کل خرید های دریافت نشده</h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <div style="overflow-x:auto;overflow-y:auto;">
                            <table id="example1" class="table table-bordered table-striped">

                                <thead>
                                <tr>
                                    <th>کد خرید</th>
                                    <th>وضعیت</th>
                                    <th>نام محصول</th>
                                    <th>تعداد محصول</th>
                                    <th>قیمت محصول</th>

                                </tr>
                                </thead>
                                <tbody id="tcbody">



@foreach(\App\Models\Paired::all()->where('user_id','=',\Illuminate\Support\Facades\Auth::user()->id)->toArray() as $usari)
                                    <tr>

                                    <td>{{$usari['ref_id']}}</td>
                                    <td>{{$usari['status']}}</td>
                                        <td>{{$usari['ad_name']}}</td>
                                    <td>{{$usari['ad_count']}}</td>
                                    <td>{{$usari['price_count']}}</td>

                                @endforeach
                            </table>
                        </div>
                    </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    </form>

    <div class="col-3">
        <div class="sidebar">

            <div class="widget user-dashboard-profile">

                <div class="profile-thumb">
                    <img src="/user-photos/{{\Illuminate\Support\Facades\Auth::user()->user_image}}" alt="" class="rounded-circle">
                </div>

                <h5 class="text-center">{{\Illuminate\Support\Facades\Auth::user()->name}}</h5>
                <p>Joined {{\Carbon\Carbon::parse(\Illuminate\Support\Facades\Auth::user()->created_at)->format('Y-m-d')}}</p>
                <a href="/cp/edit_profile" class="btn btn-main-sm">پنل کاربری</a>
            </div>

            <div class="widget user-dashboard-menu">
                <ul>
                    <li class="active"><a href="/saled"><i class="fa fa-user"></i> خرید های من</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>


@endsection
@section('Scripts')
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

    <script src="/assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

    <script src="/assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/assets/admin/plugins/jszip/jszip.min.js"></script>
    <script src="/assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="/assets/admin/dist/js/mydash.js"></script>


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

        $(".delete_btn").on("click", function (e) {


            var delete_btn_obj = $(this);
            var edit_id = delete_btn_obj.attr("cat_id");

            $('.alert-danger').html("");
            $('.alert-danger').hide();

            $(".result").html("");


            e.preventDefault();
            $.post("/cp/users", {id: edit_id, "_token": "{{ csrf_token() }}",}, function (data) {

                if (data == true) {
                    alert("Your Category Deleted Successfully!")
                    location.reload();
                } else {
                    alert("Error in Deleting!")
                }
            });
        });


        $(".soft_delete").on("change", function (e) {

            var soft_delete_obj = $(this);
            var cat_id = soft_delete_obj.val();
            var delete_or_not = 0;



            var self = $(this);
            if (self.is(":checked")) {
                delete_or_not=1;
            } else {
                delete_or_not=0;
            }


            $.post("/cp/soft", {
                id: cat_id,
                "_token": "{{ csrf_token() }}",
                delete_or_not:delete_or_not
            }, function (data) {

                if (data == true) {
                    if (delete_or_not==1){
                        $('#yeso').text('Yes');
                        alert("Your Category Moved to Trash Successfully!");
                    }else{
                        $('#yeso').text('No');
                        alert("Your Category recovered from Trash Successfully!")
                    }

                    location.reload();
                } else {
                    alert("Error in Soft Deleting!")
                }
            });
        });


        $(document).ready(function () {
            $('#example1').DataTable();
        });


    </script>


    <script>

        $(".delete_btn").on("click", function (event) {

            let forsat = new FormData();
            let delete_btn_obj = $('.delete_btn');
            let edit_id = delete_btn_obj.attr("cat_id");

            //$(".alert-danger").html("");
            //$('.alert-danger').hide();
            //$(".result").html("");

            forsat.append('id', edit_id);
            event.preventDefault();
            $.ajaxSetup({
                headers: {'X-CSRF-Token': '{{csrf_token()}}'}
            })

            $.ajax({
                url: '/cp/users',
                type: 'POST',
                dataType: 'json',
                data: forsat,
                processData: false,
                contentType: false,
                success: function (rez) {
                        if (rez['true']) {
                            alert(rez['true']);
                            location.reload();
                            return false;
                        }else{
                            if (rez['false']) {
                                alert(rez['false']);
                                return location.reload();
                            }else{
                                alert(JSON.stringify(rez));
                                return location.reload();
                            }
                        }
                },
                error: function (zew) {
                    //alert("Please check form information and try again!");
                    alert(JSON.stringify(zew));
                    return false;
                }

            })
        });


        $(".soft_delete").on("change", function (e) {

            let soft_delete_obj = $(this);
            let cat_id = soft_delete_obj.val();
            let delete_or_not = 0;



            let self = $(this);
            if (self.is(":checked")) {
                delete_or_not=1;
            } else {
                delete_or_not=0;
            }
            e.preventDefault()
            $.post("/cp/soft", {
                "id": cat_id,
                "_token": "{{ csrf_token() }}",
                "delete_or_not":delete_or_not
            }, function (data) {

                if (data) {
                    if (delete_or_not!==1) {
                        alert("User recovered from Trash Successfully!")
                    } else {
                        alert("User Moved to Trash Successfully!")
                    }

                    location.reload();
                } else {
                    alert("Error in Soft Deleting!")
                }
            });
        });


        $(".is_admin").on("change", function (e) {

            let soft_delete_obj = $(this);
            let cat_id = soft_delete_obj.val();
            let delete_or_not = 0;



            let self = $(this);
            if (self.is(":checked")) {
                delete_or_not=1;
            } else {
                delete_or_not=0;
            }
            e.preventDefault()
            $.post("/cp/admin", {
                "id": cat_id,
                "_token": "{{ csrf_token() }}",
                "is_admin":delete_or_not
            }, function (data) {

                if (data) {
                    if (delete_or_not!==1) {
                        alert("User recovered from Trash Successfully!")
                    } else {
                        alert("User Moved to Trash Successfully!")
                    }

                    location.reload();
                } else {
                    alert("Error in Soft Deleting!")
                }
            });
        });

        $(document).ready(function () {
            $('#example1').DataTable();
        });

        if($("#example1")) {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        }
        if($('#example2')) {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        }
    </script>

@endsection
