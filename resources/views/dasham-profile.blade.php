@extends("layouts.main")

@section("Head-text")
    PowerTransco | Bill
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

        .qtySelector{
            border: 1px solid #ddd;
            width: 107px;
            height: 35px;
            margin: 10px auto 0;
        }
        .qtySelector .fa{
            padding: 10px 5px;
            width: 35px;
            height: 100%;
            float: left;
            cursor: pointer;
        }
        .qtySelector .fa.clicked{
            font-size: 12px;
            padding: 12px 5px;
        }
        .qtySelector .fa-minus{
            border-right: 1px solid #ddd;
        }
        .qtySelector .fa-plus{
            border-left: 1px solid #ddd;
        }
        .qtySelector .qtyValue{
            border: none;
            padding: 5px;
            width: 35px;
            height: 100%;
            float: left;
            text-align: center
        }




    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/cdnjs/style.css">


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


@section('mainSection')
    <main class="page" style="
    margin-top: -1%;
">

        <section class="shopping-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text">سبد خرید</h2>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <div class="items">
                               @if(isset($_SESSION['listesh'])!==false)
                                @foreach($_SESSION["listesh"] as $doz)
                                <div class="product moz-{{$doz}}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img class="img-fluid mx-auto d-block image" src="/user-photos/{{\App\Models\Ad::find($doz)->tmp_path}}/{{\App\Models\Ad::find($doz)->img_path}}">
                                        </div>
                                        <div class="col-md-8">
                                            <button onclick="
$('#moz-{{$doz}}').hide();
" id="delad_{{$doz}}" type="button" class="btn-close btn-close-black" aria-label="Close" style="float:right;"></button>
                                            <div class="info">
                                                <div class="row">
                                                    <div class="col-md-5 product-name">
                                                        <div class="product-name">
                                                            <a href="#">{{\App\Models\Ad::find($doz)->title}}</a>
                                                            <div class="product-info">
                                                                <div>Category: <span class="value">{{\App\Models\Cats::find(\App\Models\Ad::find($doz)->cat_id)->cat}}</span></div>
                                                                <div>Brand : <span class="value">{{\App\Models\City::find(\App\Models\Ad::find($doz)->city_id)->title}}</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 quantity">

                                                        <div class="quer-{{$doz}} qtySelector text-center" style="margin-top: 23%;">
                                                            <i class="dequ-{{$doz}} fa fa-minus decreaseQty"></i>
                                                            <span min="0" type="number" class="qter qter-{{$doz}} qtyValue">1</span>
                                                            <i class="inqu-{{$doz}} fa fa-plus increaseQty"></i>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-3 price">
                                                        <span>تومان </span><span class="megh megh-{{$doz}}" jash="{{\App\Models\Ad::find($doz)->id}}" chr{{$doz}}="{{\App\Models\Ad::find($doz)->price}}" id="megh_{{$doz}}">{{\App\Models\Ad::find($doz)->price}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                    @endif

                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="summary">
                                <h3>صورتحساب</h3>
                                <div class="summary-item"><span class="text">جمع مبلغ</span><span class="price text"> تومان </span><span id="totl" class="price text">{{$fiz}}</span></div>
                                @if($_SESSION["listesh"]!==[])
                                <a id="checkout"
                                   type="button" class="btn btn-primary btn-lg btn-block">Checkout</a>
                                @else
                                    <a id="checkout" onclick="alert('لطفا ابتدا محصولی را انتخاب کنید وسپس پرداخت کنید.');" type="button" class="btn btn-primary btn-lg btn-block">Checkout</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('Scripts')
    <script src="/js/app.js"></script>
    <script src="/plugins/jQurey/jquery.min.js"></script>


    <script src="/plugins/jQurey/rating.js"></script>
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

        $(document).ready(function (){

            const selectedTitles = $(".qter").map(function() {
                return  $(this).text();
            }).get();

            const selectedTitles2 = $(".megh").map(function() {
                return  $(this).text();
            }).get();

            const selectedTitles3 = $(".megh").map(function() {
                return  $(this).attr('jash');
            }).get();





            const obj = {};

            selectedTitles3.forEach((element, index) => {
                obj[element] = selectedTitles2[index];
            });
            console.log(obj);
            $('#checkout').attr('href', '/checkout?amount={{$fiz}}&io='+JSON.stringify(obj)+'&desc={{count($_SESSION["listesh"])>1?'پرداخت به power-transco':'power-tr'}}&email={{\Illuminate\Support\Facades\Auth::user()?\Illuminate\Support\Facades\Auth::user()->email:''}}&mobile={{\Illuminate\Support\Facades\Auth::user()?\Illuminate\Support\Facades\Auth::user()->phone:''}}');



            console.log(result);
            console.log(selectedTitles2);




            var value = selectedTitles2;
            var blkstr = [];
            $.each(value, function(idx2,val2) {
                var str = idx2 + "=>" + val2;
                blkstr.push(str);
                blkstr.join(", ");

            });

            console.log(blkstr);

            var values = $(".qter")
                .map(function(){return $(this).text();}).get();
            console.log(values);

            var allRelevantData='';
            $( ".qter" ).each(function(index) {
                allRelevantData = ($(this).text() + ": " + index);
            });
            console.log(allRelevantData);


        });


        var minVal = 1, maxVal = 1000000; // Set Max and Min values
        // Increase product quantity on cart page


        var keys = [];
        @foreach($_SESSION["listesh"] as $doz)


        $(".inqu-{{$doz}}").on('click', function(){
            var $parentElm = $(this).parents(".quer-{{$doz}}");
            $(this).addClass("clicked");
            setTimeout(function(){
                $(".clicked").removeClass("clicked");
            },100);
            var value = $parentElm.find(".qter-{{$doz}}").text();
            if (value < maxVal) {
                value++;
                $parentElm.find(".qter-{{$doz}}").text(value);
                let de=$('#megh_{{$doz}}').text();
                let ze=$('#megh_{{$doz}}').attr('chr{{$doz}}');
                let ro=parseInt(de)+parseInt(ze);
                var values = $(".qter")
                    .map(function(e,q){e=value;return e+q;}).get();
                console.log(values);

                let zo=parseInt($('#totl').text())+parseInt(ze);
                $('#megh_{{$doz}}').text($('#megh_{{$doz}}').text().replace(de, ro));
                $('#totl').text($('#totl').text().replace($('#totl').text(), zo));
                $parentElm.find(".qter-{{$doz}}").text(value);

                const selectedTitles2 = $(".megh").map(function() {
                    return  $(this).text();
                }).get();

                const selectedTitles3 = $(".megh").map(function() {
                    return  $(this).attr('jash');
                }).get();

                const obj = {};

                selectedTitles3.forEach((element, index) => {
                    obj[element] = selectedTitles2[index];
                });
                console.log(obj);
                $('#checkout').attr('href', '/checkout?amount='+zo+'&io='+JSON.stringify(obj)+'&desc={{count($_SESSION["listesh"])>1?'پرداخت به power-transco':'power-tr'}}&email={{\Illuminate\Support\Facades\Auth::user()?\Illuminate\Support\Facades\Auth::user()->email:''}}&mobile={{\Illuminate\Support\Facades\Auth::user()?\Illuminate\Support\Facades\Auth::user()->phone:''}}');


                console.log($('#checkout').attr('href'));

            }
            //$parentElm.find(".qter-{{$doz}}").text(value);
        });
        // Decrease product quantity on cart page
        $(".dequ-{{$doz}}").on('click', function(){
            var $parentElm = $(this).parents(".quer-{{$doz}}");
            $(this).addClass("clicked");
            setTimeout(function(){
                $(".clicked").removeClass("clicked");
            },100);
            var value = $parentElm.find(".qter-{{$doz}}").text();
            if (value > 0) {
                value--;
                let de=$('#megh_{{$doz}}').text();
                let ze=$('#megh_{{$doz}}').attr('chr{{$doz}}');
                let ro=parseInt(de)-parseInt(ze);
                let zo=parseInt($('#totl').text())-parseInt(ze);
                $('#megh_{{$doz}}').text($('#megh_{{$doz}}').text().replace(de, ro));
                $('#totl').text($('#totl').text().replace($('#totl').text(), zo));
                $parentElm.find(".qter-{{$doz}}").text(value);
                const selectedTitles2 = $(".megh").map(function() {
                    return  $(this).text();
                }).get();

                const selectedTitles3 = $(".megh").map(function() {
                    return  $(this).attr('jash');
                }).get();

                const obj = {};

                selectedTitles3.forEach((element, index) => {
                    obj[element] = selectedTitles2[index];
                });
                console.log(obj);
                $('#checkout').attr('href', '/checkout?amount='+zo+'&io='+JSON.stringify(obj)+'&desc={{count($_SESSION["listesh"])>1?'پرداخت به power-transco':'power-tr'}}&email={{\Illuminate\Support\Facades\Auth::user()?\Illuminate\Support\Facades\Auth::user()->email:''}}&mobile={{\Illuminate\Support\Facades\Auth::user()?\Illuminate\Support\Facades\Auth::user()->phone:''}}');



            }

        });

        $('#delad_{{$doz}}').on('click',function(event){
            event.preventDefault();


            $.ajax({
                url: "/buy",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    "ad_id": "{{$doz}}"
                },
                success:function(response) {
                    //alert('Success Your file is Uploaded!');
                    alert(response);
                    window.location.reload();
                    //location.reload();
                    //console.log(response);

                },
                error:function (response){
                    alert(JSON.stringify(response));
                },
            });
        });
        @endforeach


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
                url: '/cp/edit_profile',
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



@endsection
