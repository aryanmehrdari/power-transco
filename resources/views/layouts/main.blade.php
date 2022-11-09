<!doctype html>
<html lang="en">

<head>
    <title>@yield("Head-text")</title>

    @yield("Head")
</head>

<section id="heds">
    @include("partials.header")
</section>

<body>
<div id="contin" class="container-fluid" style="padding: 0%;">
@yield("mainSection")
@yield("PagiNation")

</div>
</body>

<section>
    @include("partials.footer")
</section>


@yield("Scripts")
<!--script src="{ mix('/js/app.js') }}"></script-->
<!--script src="/assets/plugins/jquery/jquery.min.js"></script!-->
</html>

