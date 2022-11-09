<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADs</title>


    <link rel="stylesheet" href="{{ mix('/css/app-2.css') }}">
<link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.css">



</head>
<body>

<div class="container">

    <header>
        @include("partials.header0")
    </header>


    <div class="row">
        <div class="col-md-9">
            @yield("mainSection0")
        </div>

        <div class="col-md-3">
            @include("partials.sidebar0")
        </div>
    </div>


</div>

<script src="{{ mix('/js/app.js') }}"></script>
<script src="/assets/plugins/jquery/jquery.min.js"></script>

 @yield("scripts")

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
                for (i = 0; i < data.length; ++i) {
                   result +="<li> <a href='"  +  "/ad/" + data[i]['id'] + "' >" + data[i]['title'] + "</a></li>";
                  //  $(".ajax_search_sug ul").append("<li> <a href='"  +  "/ad/" + data[i]['id'] + "' >" + data[i]['title'] + "</a></li>");
                }

				$(".ajax_search_sug ul").replaceWith('<ul>' + result + '</ul>');
                $(".ajax_search_sug").show();


            } else {
                $(".ajax_search_sug ul").html("");
                $(".ajax_search_sug").hide();
            }


        });


    }


</script>


</body>
</html>
