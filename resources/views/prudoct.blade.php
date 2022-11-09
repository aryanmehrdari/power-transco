@extends("layouts.main")

@section("Head-text")
    PowerTransco | محصولات
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
        <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap-slider.css">
        <!-- Font Awesome -->
        <link href="/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Owl Carousel -->
        <link href="/plugins/slick-carousel/slick/slick.css" rel="stylesheet">
        <link href="/plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
        <!-- Fancy Box -->
        <link href="/plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
        <link href="/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
        <!-- CUSTOM CSS -->
        <link href="/css-1/style.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/headers.css">



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

            .w-5{
                display: none;
            }

            .paginate { display: flex; }
            .paginate a {
                color: #000;
                background: #f2f2f2;
                padding: 8px 10px;
                margin: 2px;
                text-decoration: none;
                cursor: pointer;
            }
            .paginate a.current {
                color: #fff;
                background: #4486ff;
            }
            .paginate a:hover {
                color: #000;
                background: #ffe9e9;
            }

            em {
                display: block;
                margin: .5em auto 2em;
                color: #bbb;
            }

            p, p a {
                color: #aaa;
                text-decoration: none;
            }
            p a:hover,
            p a:focus {
                text-decoration: underline;
            }
            p + p { color: #bbb; margin-top: 2em;}
            .detail {position: absolute; text-align: right; right: 5px; bottom: 5px; width: 50%;}

            a[href*="intent"] {
                display:inline-block;
                margin-top: 0.4em;
            }

            /*
             * Rating styles
             */
            .rating {
                width: 226px;
                margin: 0 auto 1em;
                font-size: 20px;
                overflow:hidden;
            }

            .rating input {
                float: right;
                opacity: 0;
                position: absolute;
            }
            .rating a,
            .rating label {
                float:right;
                color: #aaa;
                text-decoration: none;
                -webkit-transition: color .4s;
                -moz-transition: color .4s;
                -o-transition: color .4s;
                transition: color .4s;
            }

            .rating2 {
                direction: rtl;
            }
            .rating2 a {
                float:none
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
    <li><a href="/product" class="nav-link px-2 text-info">محصولات</a></li>
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

    <section class="hero-area bg-2 text-center overly">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="
    padding-bottom: 5%;
">
                    <!-- Header Contetnt -->
                    <div class="content-block" style="
    padding: 0%;
    margin-top: -5%;
">
                        <h1 style="">محصولات</h1>



                    </div>
                    <!-- Advance Search -->


                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>
    <section class="section-sm" style="padding: 0%;">

        <div class="container">
		<br>
            @if($result==true)
            <div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray">
					<h2>Results For "Electronics"</h2>
					<p>123 Results on 12 December, 2017</p>
				</div>
			</div>
		</div>
            @endif

			<div class="row">
			<div class="col-md-3">
				<div class="category-sidebar">
					<div class="widget category-list">
	<h4 class="widget-header">همه دسته بندی ها</h4>
	<ul class="category-list">
        @foreach($cat as $gz)
		<li><a href="/product?cat={{$gz["id"]}}">{{$gz["cat"]}}<span>{{count(\App\Models\Ad::all()->where('cat_id','=',$gz["id"])->toArray())}}</span></a></li>
        @endforeach
	</ul>
</div>

<div class="widget category-list">
	<h4 class="widget-header">همه برند ها</h4>
	<ul class="category-list">
		@foreach($cit as $gnz)
        <li><a href="/product?brand={{$gnz["id"]}}">{{$gnz["title"]}}<span>{{count(\App\Models\Ad::all()->where('city_id','=',$gnz["id"])->toArray())}}</span></a></li>
        @endforeach
	</ul>
</div>


				</div>
			</div>



                <div class="col-lg-9 col-md-8">
                <div class="category-search-filter">
                    <div class="row">
                        <div class="col-md-6">



                            <strong>ترتیب بر اساس</strong>
                            <select style="display: none;">
                                <option value="0">همه آگهی ها</option>
                                <option value="1">محبوبترین</option>
                                <option value="2">ارزانترین</option>
                                <option value="4">گرانترین</option>
                                <option value="5">آخرین اگهی ها</option>
                            </select>
                            <div class="nice-select" tabindex="0">
                                <span class="current">{{isset($_GET["sort"])!==false && $_GET["sort"]==0?'All Ads':(
    isset($_GET["sort"])!==false && $_GET["sort"]==1?'Most Popular':(
        isset($_GET["sort"])!==false && $_GET["sort"]==2?'Lowest Price':(
            isset($_GET["sort"])!==false && $_GET["sort"]==3?'Highest Price':(
                isset($_GET["sort"])!==false && $_GET["sort"]==4?'Most Recent':'All Ads'
            )
        )
    )
)}}</span>
                                <ul class="list">
                                    <a href="/product?sort=0" id="allzs" data-value="0" class="option {{isset($_GET["sort"])!==false && $_GET["sort"]==0?'selected':''}}">All Ads</a>
                                    <br>
                                    <a href="/product?sort=1" id="mostpop" data-value="1" class="option {{isset($_GET["sort"])!==false && $_GET["sort"]==1?'selected':''}}">Most Popular</a>
                                    <br>
                                    <a href="/product?sort=2" id="lowprice" data-value="2" class="option {{isset($_GET["sort"])!==false && $_GET["sort"]==2?'selected':''}}">Lowest Price</a>
                                    <br>
                                    <a href="/product?sort=3" id="highprice" data-value="3" class="option {{isset($_GET["sort"])!==false && $_GET["sort"]==3?'selected':''}}">Highest Price</a>
                                    <br>
                                    <a href="/product?sort=4" id="mostrecent" data-value="4" class="option {{isset($_GET["sort"])!==false && $_GET["sort"]==4?'selected':''}}">Most Recent</a>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="view">
                                <strong>نوع نمایش</strong>
                                <ul class="list-inline view-switcher">
                                    <li class="list-inline-item">
                                        <a id="khate" onclick="$('#khati').hide();$('#dooneyi').show();$('#donez').attr('class','');$(this).attr('class','text-info');" class="text-info"><i class="fa fa-th-large"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="donez" onclick="$('#khati').show();$('#dooneyi').hide();$('#khate').attr('class','');$(this).attr('class','text-info');" ><i class="fa fa-reorder"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                    <div id="dooneyi">


				<div class="product-grid-list">
					<div class="row mt-30">
						@foreach($ads as $ds)
                        <div class="col-sm-12 col-lg-4 col-md-6">

<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<div class="price">تومان {{$ds["price"]}}</div>
			<a href="/single/?id={{$ds["id"]}}">
				<img class="card-img-top img-fluid img-responsive img-thumbnail" src="/user-photos/{{$ds["tmp_path"]}}/{{$ds["img_path"]}}" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="/single/?id={{$ds["id"]}}">{{$ds["title"]}}</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="/product/?cat={{\App\Models\Cats::find($ds["cat_id"])->id}}"><i class="fa fa-folder-open-o"></i>{{\App\Models\Cats::find($ds["cat_id"])->cat}}</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="/product/?brand={{\App\Models\City::find($ds["city_id"])->id}}"><i class="fa fa-calendar"></i>{{\App\Models\City::find($ds["city_id"])->title}}</a>
		    	</li>
		    </ul>
		    <p class="card-text" style=" overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 2; /* number of lines to show */
           line-clamp: 2;
   -webkit-box-orient: vertical;">{{$ds["text_content"]}}</p>
		    <div class="product-ratings">
		    	<ul class="list-inline">

                    @for($p=1;$p<=round($ds["star"]);$p++)
                            <li id="star{{$p}}" class="list-inline-item selected"><i class="fa fa-star"></i></li>
                    @endfor
                        @for($o=5;$o>=trim(round($ds["star"])+1);$o--)
                            <li id="star{{$o}}" class="list-inline-item"><i class="fa fa-star"></i></li>
                        @endfor


		    	</ul>
		    </div>
		</div>
	</div>
</div>



						</div>
                        @endforeach

					</div>
				</div>





			</div>
                    <div style="display: none;" id="khati">
                        <!-- ad listing list  -->
                        @foreach($ads as $ds)
                            <div class="ad-listing-list mt-20">
                                <div class="row p-lg-3 p-sm-5 p-4">
                                    <div class="col-lg-4 align-self-center">

                                        <a href="/single/?id={{$ds["id"]}}">
                                            <img src="/user-photos/{{$ds["tmp_path"]}}/{{$ds["img_path"]}}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-10">
                                                <div class="ad-listing-content">
                                                    <div>
                                                        <a href="/single/?id={{$ds["id"]}}" class="font-weight-bold">{{$ds["title"]}}</a>
                                                    </div>
                                                    <ul class="list-inline mt-2 mb-3">
                                                        <li class="list-inline-item"><a href="/product/?cat={{\App\Models\Cats::find($ds["cat_id"])->id}}"> <i class="fa fa-folder-open-o"></i> {{\App\Models\Cats::find($ds["cat_id"])->cat}}</a></li>
                                                        <li class="list-inline-item"><a href="/product/?brand={{\App\Models\City::find($ds["city_id"])->id}}"><i class="fa fa-calendar"></i>{{\App\Models\City::find($ds["city_id"])->title}}</a></li>

                                                        <li><div style="margin-left: 0%;" class="rating rating2">

                                                            @for($j=5;$j>=trim(round($ds["star"])+1);$j--)
                                                                <a value="{{$j}}" id="element{{$j}}" onclick="fekr{{$j}}();" class="estar" title="Give {{$j}} stars">★</a>
                                                            @endfor
                                                            @for($i=round($ds["star"]);$i>=1;$i--)
                                                                <a value="{{$i}}" id="element{{$i}}" onclick="fekr{{$i}}();" style="color: orange;" class="estar" title="Give {{$i}} stars">★</a>
                                                            @endfor

                                                        </div></li>
                                                        <li><div class="price">تومان {{$ds["price"]}}</div></li>
                                                    </ul>
                                                    <p class="pr-5" style=" overflow: hidden;text-overflow: ellipsis;">{!! $ds["text_content"].'...'!!}</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach


                    <!-- ad listing list  -->
                    </div>

                </div>

		</div>
			</div>
			</section>
<br>
    <div class="row justify-content-center text-center"><div id="demoA"></div></div>
    <br>
@endsection

@section("Scripts")
    <!-- jquery -->

    <script>
        paginator({
            target : document.getElementById("demoA"),
            total : {{$ads->lastPage()}},
            click : "/product"

        });


        function paginator (instance) {

            // (A) INIT & SET DEFAULTS
            if (instance.current === undefined) {
                let param = new URLSearchParams(window.location.search);
                instance.current = param.has("page") ? Number.parseInt(param.get("page")) : 1;
            }
            if (instance.adj === undefined) { instance.adj = 2; }
            if (instance.adj <= 0) { instance.adj = 1; }
            if (instance.current <= 0) { instance.current = 1; }
            if (instance.current > instance.total) { instance.current = instance.total; }

            const jsmode = typeof instance.click == "function";
            const fu = "{{isset($_GET["sort"])!==false?'/?sort='.$_GET["sort"].'&page=':'/?page='}}";
            if (jsmode === false) {
                if (instance.click.indexOf("?") ===-1) { instance.click += fu.replace(/\&amp;/g,'&'); }
                else { instance.click += "&page="; }
            }

            // (C) HTML PAGINATION WRAPPER
            instance.target.innerHTML = "";
            instance.target.classList.add("paginate");

            // (D) DRAW PAGINATION SQUARES
            // (D1) HELPER FUNCTION TO DRAW PAGINATION SQUARE
            const square = (txt, page, css) => {
                let el = document.createElement("a");
                el.innerHTML = txt;
                //el.setAttribute('onclick','if($(\'#khate\').className===\'text-info\'){}');
                if (css) { el.className = css; }
                if (jsmode) { el.onclick = () => { instance.click(page); }; }
                else { el.href = instance.click + page; }
                instance.target.appendChild(el);
            };

            // (D2) BACK TO FIRST PAGE (DRAW ONLY IF SUFFICIENT SQUARES)
            if (instance.current - instance.adj > 1) { square("&#10218;", 1, "first"); }

            // (D3) ADJACENT SQUARES BEFORE CURRENT PAGE
            let temp;
            if (instance.current > 1) {
                temp = instance.current - instance.adj;
                if (temp<=0) { temp = 1; }
                for (let i=temp; i<instance.current; i++) { square(i, i); }
            }

            // (D4) CURRENT PAGE
            square(instance.current, instance.current, "current");

            // (D5) ADJACENT SQUARES AFTER CURRENT PAGE
            if (instance.current < instance.total) {
                temp = instance.current + instance.adj;
                if (temp > instance.total) { temp = instance.total; }
                for (let i=instance.current+1; i<=temp; i++) { square(i, i); }
            }

            // (D6) SKIP TO LAST PAGE (DRAW ONLY IF SUFFICIENT SQUARES)
            if (instance.current <= instance.total - instance.adj - 1) {
                square("&#10219;", instance.total, "last");
            }
        }



    </script>

    <script src="/plugins/jQuery/jquery.min.js"></script>
    <script src="/plugins/bootstrap/js/popper.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap-slider.js"></script>
    <!-- tether js -->
    <script src="/plugins/tether/js/tether.min.js"></script>
    <script src="/plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="/plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="/plugins/fancybox/jquery.fancybox.pack.js"></script>
    <script src="/plugins/google-map/gmap.js"></script>
    <script src="/js/script.js"></script>


    <script src="/plugins/form-validation/jquery.form.js"></script>
    <script src="/plugins/form-validation/jquery.validate.min.js"></script>
    <!-- slick slider -->

    <!-- bootstrap js -->


    <!-- wow js -->
    <script src="/plugins/wow-js/wow.min.js"></script>
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


