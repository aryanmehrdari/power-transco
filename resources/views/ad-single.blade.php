@extends("layouts.main")

@section("Head-text")
    PowerTransco | Single
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
                font-size: 41px;
                overflow:hidden;
            }
            .reyt{
                width: 226px;
                margin: 0 auto 1em;
                font-size: 26px;
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
            .rating label:hover ~ label,
            .rating input:focus ~ label,
            .rating label:hover,
            .rating a:hover,
            .rating a:hover ~ a,
            .rating a:focus,
            .rating a:focus ~ a		{
                color: orange;
                cursor: pointer;
            }
            .rating2 {
                direction: rtl;
            }
            .rating2 a {
                float:none
            }











            * { box-sizing: border-box; }



            .ratingo {
                display: flex;
                width: 70%;
                justify-content: center;
                overflow: hidden;
                flex-direction: row-reverse;
                height: 150px;
                position: relative;
            }


            .ratingo > input {
                display: none;
            }

            .ratingo > label {
                cursor: pointer;
                width: 40px;
                height: 40px;
                margin-top: auto;
                background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23e3e3e3' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
                background-repeat: no-repeat;
                background-position: center;
                background-size: 76%;
                transition: .3s;
            }

            .ratingo > input:checked ~ label,
            .ratingo > input:checked ~ label ~ label {
                background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23fcd93a' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
            }


            .ratingo > input:not(:checked) ~ label:hover,
            .ratingo > input:not(:checked) ~ label:hover ~ label {
                background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23d8b11e' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
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

@section("mainSection")


    <section class="section bg-gray">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<!-- Left sidebar -->
			<div class="col-md-8 border border-gray-100">
				<div class="product-details">
					<h1 class="product-title">{{$fioz->title}}</h1>
					<div class="product-meta">
						<ul class="list-inline">

							<li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Category <a href="/Category?id={{\App\Models\Cats::find($fioz->cat_id)->id}}">{{\App\Models\Cats::find($fioz->cat_id)->cat}}</a></li>
							<li class="list-inline-item"><i class="fa fa-location-arrow"></i> Brand <a href="/Brand?id={{\App\Models\City::find($fioz->city_id)->id}}">{{\App\Models\City::find($fioz->city_id)->title}}</a></li>
						</ul>
					</div>

					<!-- product slider -->
					<div class="product-slider slick-initialized slick-slider slick-dotted">

                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="background: #5a6268;">
                            <div class="carousel-inner">
                                <div class="carousel-item active" style="  width: 100%;
  height: 400px;
  background-repeat: no-repeat;
  background-size: contain;">
                                    <img data-browse="{{$fioz->id}}" class="d-block w-100" alt="First slide" src="/user-photos/{{$fioz->tmp_path}}/{{$fioz->img_path}}">
                                </div>


@foreach($ads as $ds)
                                    <div class="carousel-item" style="  width: 100%;
  height: 400px;
  background-repeat: no-repeat;
  background-size: contain;">
                                        <img data-browse="{{$ds}}" class="d-block w-100" src="/user-photos/{{$fioz->tmp_path}}/{{$ds}}" alt="Second slide">
                                    </div>
                                @endforeach



                            </div>

                            <a class="fa fa-chevron-left arrow-left slick-arrow carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="fa fa-chevron-right arrow-right slick-arrow carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">

                                <span class="sr-only">Next</span>
                            </a>
                        </div>


@if(count($adds)>=5)
    <br>
					<ul class="slick-dots" style="" role="tablist">
                        <li class="slick-active" role="presentation">
                            <img class="img-fluid" src="/user-photos/{{$fioz->tmp_path}}/{{$fioz->img_path}}" alt="product-img">
                        </li>
                        @foreach($ads as $ds)
                        <li role="presentation">
                            <img class="img-fluid" src="/user-photos/{{$fioz->tmp_path}}/{{$ds}}" alt="product-img">
                        </li>
                        @endforeach

                    </ul>
                        @endif
                        <br>
                        @if(\Illuminate\Support\Facades\Auth::user())
                        <form method="POST" action="/single/?id={{$fioz->id}}">
                            @csrf
                            <input type="hidden" id="ad_id" name="ad_id" value="{{$fioz->id}}">
                        <ul class="text-center row justify-content-center list-inline mt-20">
                            <li class="list-inline-item">
                                <button id="addtobasket" type="submit" class="text-white btn btn-contact d-inline-block  btn-primary px-lg-5 my-1 px-md-3">افزودن به سبد خرید</button></li>

                        </ul>
                        </form>
                        @else
                            <ul class="text-center row justify-content-center list-inline mt-20">
                                <li class="list-inline-item">
                            <a id="addtobasket" href="/login" class="text-white btn btn-contact d-inline-block  btn-primary px-lg-5 my-1 px-md-3">افزودن به سبد خرید</a>
                                </li>
                            </ul>
                        @endif
                    </div>

					<!-- product slider -->

					<div class="content mt-1 pt-1">

						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<h3 class="tab-title">توضیحات محصول</h3>
								<p style="word-wrap: break-word;
   -webkit-box-orient: vertical;">{{$fioz->text_content}}</p>

							</div>
							<br>
                            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
								<h3 class="tab-title">مشخصات محصول</h3>
								<table class="table table-bordered product-table">
									<tbody>
										<tr>
											<td>قیمت</td>
											<td class="text">{{\App\Models\Ad::find($_GET['id'])->price}} تومان</td>
										</tr>
										<tr>
											<td>برند</td>
											<td>{{\App\Models\City::find(\App\Models\Ad::find($_GET["id"])->city_id)->title}}</td>
										</tr>
										<tr>
											<td>دسته بندی</td>
											<td>{{\App\Models\Cats::find(\App\Models\Ad::find($_GET["id"])->cat_id)->cat}}</td>
										</tr>

									</tbody>
								</table>
							</div>
							<br>
                            <div class="tab-pane fade show active" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
								<h3 class="tab-title">بازخورد محصول</h3>
								<div class="product-review">

                                    @foreach(\App\Models\Comment::all()->where('ad_id','=',$_GET["id"])->toArray() as $fer)

                                    <div class="media">
										<!-- Avater -->
										<img src="/user-photos/{{\App\Models\User::find($fer['user_id'])->user_image}}" alt="avater">
										<div class="media-body">
											<!-- Ratings -->
											<div class="ratings">

                                                <div style="margin-left: 0%;" class="reyt rating rating2">

                                                    @for($j=5;$j>=trim(round($fer["star"])+1);$j--)
                                                        <a value="{{$j}}" id="element0{{$j}}" {{\Illuminate\Support\Facades\Auth::user()?'onclick=fekr'.$j.'();$(\'#star\').attr(\'value\',$(this).attr(\'value\'));':'onclick=alert(\'PleaseLogin!\')'}} class="estar" href="#{{$j}}" title="Give {{$j}} stars">★</a>
                                                    @endfor
                                                    @for($i=round($fer["star"]);$i>=1;$i--)
                                                        <a value="{{$i}}" id="element0{{$i}}" style="color: orange;" {{\Illuminate\Support\Facades\Auth::user()?'onclick=fekr'.$j.'();$(\'#star\').attr(\'value\',$(this).attr(\'value\'));':'onclick=alert(\'PleaseLogin!\')'}} class="estar" href="#{{$i}}" title="Give {{$i}} stars">★</a>
                                                    @endfor
                                                </div>


											</div>
											<div class="name">
												<h5>{{\App\Models\User::find($fer['user_id'])->name}}</h5>
											</div>
											<div class="date">
												<p>{{\Carbon\Carbon::parse($fer["created_at"])->format('Y-m-d')}}</p>
											</div>
											<div class="review-comment">
												<p>
													{{$fer["comment"]}}
												</p>
											</div>
										</div>
									</div>
                                        @endforeach


                                    <div class="review-submission">
										<h3 class="tab-title">نظرسنجی</h3>
										<!-- Rate -->
										<div class="rate">
											<div class="starrr">




                                                <div style="margin-left: 0%;margin-top: -15%;" class="reyt">
                                                    <div class="ratingo">
                                                        <input value="5" type="radio" onchange="$('#star').attr('value',$(this).attr('value'));" name="rating" id="rating-5">
                                                        <label for="rating-5"></label>
                                                        <input value="4" type="radio" onchange="$('#star').attr('value',$(this).attr('value'));" name="rating" id="rating-4">
                                                        <label for="rating-4"></label>
                                                        <input value="3" type="radio" onchange="$('#star').attr('value',$(this).attr('value'));" name="rating" id="rating-3">
                                                        <label for="rating-3"></label>
                                                        <input value="2" type="radio" onchange="$('#star').attr('value',$(this).attr('value'));" name="rating" id="rating-2">
                                                        <label for="rating-2"></label>
                                                        <input value="1" type="radio" onchange="$('#star').attr('value',$(this).attr('value'));" name="rating" id="rating-1">
                                                        <label for="rating-1"></label>
                                                    </div>
                                                </div>


                                            </div>
										</div>
										<div class="review-submit">

                                            <div class="row">


													<input type="hidden"  name="user_id" id="user_id" value="{{\Illuminate\Support\Facades\Auth::user()?\Illuminate\Support\Facades\Auth::user()->id:0}}">
													<input type="hidden"  name="star" id="star">

												<div class="col-12">
													<textarea name="review" id="review" rows="10" class="form-control" placeholder="نظرشما.."></textarea>
												</div>
												<div class="col-12">
                                                    @if(\Illuminate\Support\Facades\Auth::user())
                                                        <a onclick="comt();" id="soa" class="container-fluid text-center btn btn-primary btn-main text-white">تایید</a>
                                                    @else
                                                        <a href="/login" id="soa" class="container-fluid text-center btn btn-primary btn-main text-white">تایید</a>
                                                    @endif

												</div>
                                            </div>

										</div>
									</div>



                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>










            <div class="col-md-4 border border-gray-100">
				<div class="sidebar" style="margin-top:-16%;">
					<div class="widget price text-center">
						<h4>Price</h4>
						<p class="text">{{\App\Models\Ad::find($_GET['id'])->price}} تومان</p>
					</div>



                    <!-- rating.js file -->
                    <!-- rating.js file -->

					<!-- User Profile widget -->
                    @if(\Illuminate\Support\Facades\Auth::user())
					<div class="widget user text-center">
						<img class="rounded-circle img-fluid mb-5 px-5" src="/user-photos/{{\Illuminate\Support\Facades\Auth::user()->user_image}}" alt="">
						<h4><a>{{\Illuminate\Support\Facades\Auth::user()->name}}</a></h4>
						<p class="member-time">Member Since {{\Carbon\Carbon::parse(\Illuminate\Support\Facades\Auth::user()->created_at)->format('Y-m-d')}}</p>
						<a href="/product">See all ads</a>
						<ul class="list-inline mt-20">
							<li class="list-inline-item"><a href="{{\Illuminate\Support\Facades\Auth::user()?'/cp/edit_profile':'/edit_profile'}}" class="btn btn-contact d-inline-block  btn-primary px-lg-5 my-1 px-md-3">پنل کاربری</a></li>
						</ul>
					</div>
                @endif
					<!-- Map Widget -->

					<!-- Rate Widget -->
                    @if(\Illuminate\Support\Facades\Auth::user())
					<div class="widget rate">
						<!-- Heading -->
						<h5 class="widget-header text-center">به این آگهی چه امتیازی میدهید؟</h5>
						<!-- Rate -->




                        <div class="starrr">
                            <div>
                                <div style="margin-left: 5%;" class="rating rating2">

                                @for($j=5;$j>=trim(round($fioz->star)+1);$j--)
                                         <a value="{{$j}}" id="element{{$j}}" onclick="fekr{{$j}}();" class="estar" href="#{{$j}}" title="Give {{$j}} stars">★</a>
                                     @endfor
                                    @for($i=round($fioz->star);$i>=1;$i--)
                                        <a value="{{$i}}" id="element{{$i}}" onclick="fekr{{$i}}();" style="color: orange;" class="estar" href="#{{$i}}" title="Give {{$i}} stars">★</a>
                                    @endfor

                                </div>





                            </div>
                        </div>
					</div>
                    @endif

				</div>
			</div>

		</div>
	</div>
	<!-- Container End -->
</section>


@endsection


@section("Scripts")

    <!-- jquery -->
    <script>
        $('.carousel').carousel({
            interval: 200000
        });


        function addtoCart(){
            $.ajax({
                url: "/single/?id={{$fioz->id}}",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    "num_id":$('#lblCartCount').text(),
                    "ad_id":'{{$fioz->id}}'
                },
                success:function(response) {
                    //alert('Success Your file is Uploaded!')
                    alert(JSON.stringify(response));
                    //document.getElementById('lblCartCount').textContent +=response['dom'];
                    //location.reload();
                    //console.log(response);

                },
                error:function (msg){
                    alert(JSON.stringify(msg));
                }
            });
        }



           function fekr5() {

                $.ajaxSetup({
                    headers: {'X-CSRF-Token': '{{csrf_token()}}'}
                });


                $.ajax({
                    url: '/rating',
                    timeout:30000,
                    type: "POST",
                    data: {
                        "star": $('#element5').attr('value'),
                        "adid": '{{trim($_GET["id"])}}'
                    },
                    success : function(msg) {
                        alert(msg);
                    },
                    error: function(jqXHR, textStatus)
                    {
                        alert('Error Occured'); //MESSAGE
                    }
                })
            }
           function fekr4() {

                $.ajaxSetup({
                    headers: {'X-CSRF-Token': '{{csrf_token()}}'}
                });


                $.ajax({
                    url: '/rating',
                    timeout:30000,
                    type: "POST",
                    data: {
                        "star": $('#element4').attr('value'),
                        "adid": '{{trim($_GET["id"])}}'
                    },
                    success : function(msg) {
                        alert(msg);
                    },
                    error: function(msg)
                    {
                        alert(msg);
                    }
                })
            }
           function fekr3() {

                $.ajaxSetup({
                    headers: {'X-CSRF-Token': '{{csrf_token()}}'}
                });


                $.ajax({
                    url: '/rating',
                    timeout:30000,
                    type: "POST",
                    data: {
                        "star": $('#element3').attr('value'),
                        "adid": '{{trim($_GET["id"])}}'
                    },
                    success : function(msg) {
                        alert(msg);
                    },
                    error: function(jqXHR, textStatus)
                    {
                        alert('Error Occured'); //MESSAGE
                    }
                })
            }
           function fekr2() {

                $.ajaxSetup({
                    headers: {'X-CSRF-Token': '{{csrf_token()}}'}
                });


                $.ajax({
                    url: '/rating',
                    timeout:30000,
                    type: "POST",
                    data: {
                        "star": $('#element2').attr('value'),
                        "adid": '{{trim($_GET["id"])}}'
                    },
                    success : function(msg) {
                        alert(msg);
                    },
                    error: function(jqXHR, textStatus)
                    {
                        alert('Error Occured'); //MESSAGE
                    }
                })
            }
           function fekr1() {

                $.ajaxSetup({
                    headers: {'X-CSRF-Token': '{{csrf_token()}}'}
                });


                $.ajax({
                    url: '/rating',
                    timeout:30000,
                    type: "POST",
                    data: {
                        "star": $('#element1').attr('value'),
                        "adid": '{{trim($_GET["id"])}}'
                    },
                    success : function(msg) {
                        alert(msg);
                    },
                    error: function(jqXHR, textStatus)
                    {
                        alert('Error Occured'); //MESSAGE
                    }
                })
            }

            function fekr05() {

                $.ajaxSetup({
                    headers: {'X-CSRF-Token': '{{csrf_token()}}'}
                });


                $.ajax({
                    url: '/rating',
                    timeout:30000,
                    type: "POST",
                    data: {
                        "star": $('#element05').attr('value'),
                        "adid": '{{trim($_GET["id"])}}'
                    },
                    success : function(msg) {
                        alert(msg);
                    },
                    error: function(jqXHR, textStatus)
                    {
                        alert('Error Occured'); //MESSAGE
                    }
                })
            }
           function fekr04() {

                $.ajaxSetup({
                    headers: {'X-CSRF-Token': '{{csrf_token()}}'}
                });


                $.ajax({
                    url: '/rating',
                    timeout:30000,
                    type: "POST",
                    data: {
                        "star": $('#element04').attr('value'),
                        "adid": '{{trim($_GET["id"])}}'
                    },
                    success : function(msg) {
                        alert(msg);
                    },
                    error: function(jqXHR, textStatus)
                    {
                        alert('Error Occured'); //MESSAGE
                    }
                })
            }
           function fekr03() {

                $.ajaxSetup({
                    headers: {'X-CSRF-Token': '{{csrf_token()}}'}
                });


                $.ajax({
                    url: '/rating',
                    timeout:30000,
                    type: "POST",
                    data: {
                        "star": $('#element03').attr('value'),
                        "adid": '{{trim($_GET["id"])}}'
                    },
                    success : function(msg) {
                        alert(msg);
                    },
                    error: function(jqXHR, textStatus)
                    {
                        alert('Error Occured'); //MESSAGE
                    }
                })
            }
           function fekr02() {

                $.ajaxSetup({
                    headers: {'X-CSRF-Token': '{{csrf_token()}}'}
                });


                $.ajax({
                    url: '/rating',
                    timeout:30000,
                    type: "POST",
                    data: {
                        "star": $('#element02').attr('value'),
                        "adid": '{{trim($_GET["id"])}}'
                    },
                    success : function(msg) {
                        alert(msg);
                    },
                    error: function(jqXHR, textStatus)
                    {
                        alert('Error Occured'); //MESSAGE
                    }
                })
            }
           function fekr01() {

                $.ajaxSetup({
                    headers: {'X-CSRF-Token': '{{csrf_token()}}'}
                });


                $.ajax({
                    url: '/rating',
                    timeout:30000,
                    type: "POST",
                    data: {
                        "star": $('#element01').attr('value'),
                        "adid": '{{trim($_GET["id"])}}'
                    },
                    success : function(msg) {
                        alert(msg);
                    },
                    error: function(jqXHR, textStatus)
                    {
                        alert('Error Occured'); //MESSAGE
                    }
                })
            }



        function comt(){


               if(document.getElementById('star').value===''){
                   return alert('Please rate star and try again.');
               }
               if(document.getElementById('review').value===''){
                   return alert('Please fill all fields.');
               }


            $.ajaxSetup({
                headers: {'X-CSRF-Token': '{{csrf_token()}}'}
            });


            $.ajax({
                url: '/comment',
                timeout:30000,
                type: "POST",
                data: {
                    "comment": document.getElementById('review').value,
                    "ad_id": '{{$_GET["id"]}}',
                    "user_id": document.getElementById('user_id').value,
                    "star": document.getElementById('star').value,
                },
                success : function(msg) {
                    alert(msg);
                    window.location.reload();
                },
                error: function(jqXHR, textStatus)
                {
                    alert('Error Occured'); //MESSAGE
                }
            })
        }



    </script>

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
    <!--script src="/js/bootstrap.bundle.min.js"></script-->
    <script src="/js/app.js"></script>

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
