<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        @yield("metaTitle")
    </title>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <link rel="stylesheet" href="{{ mix('/css/app-2.css') }}">


    @yield("head")


</head>
<body>

<div class="container">

<header>
{{--    @include("partials.header")--}}
</header>

    <h1>Admin Panel</h1>
    <a href="/logout" class="btn btn-danger">Logout</a>

    <div class="row">
        <div class="col-md-12">

            <div class="row">

                <div class="col-sm-9">
                    @yield("mainSection")
                </div>
                <div class="col-sm-3">
                    <ul>
                        <li>
                            <a href="/cp/dashboard">Dashboard</a>
                        </li>
                        <li>
                            <a href="/cp/city">City</a>
                        </li>
                        <li>
                            <a href="/cp/cat">Cat</a>
                        </li>
                    </ul>
                </div>

            </div>



        </div>
    </div>



</div>


<script src="/assets/plugins/jquery/jquery.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield("scripts")
</body>
</html>
