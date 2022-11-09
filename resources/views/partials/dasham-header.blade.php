<form method="POST" action="{{ route('logout') }}">
    @csrf
    <!--
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <\!-- Left navbar links --\>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/cp/dashboard" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link" data-widget="control-sidebar" data-slide="true" role="button">Tools</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link" >Contact</a>
        </li>
    </ul>
    <li class="nav-item d-none d-sm-inline-block" style="margin-left: 24em;">

        <input type="button" href="route('logout')"
               onclick="event.preventDefault();
                                                this.closest('form').submit();" class="btn btn-block btn-danger" value="Log out">
    </li>
</nav>
    -->



        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                    <a href="/" class="nav-link">Home</a>
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">Tools</a>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <input type="button" href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();" class="btn btn-block btn-danger" value="Log out">
            </ul>
        </nav>






</form>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">@yield('NamePageSection')</h1>
            </div><!-- /.col -->

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/cp/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">@yield('NamePageSection')</li>
                </ol>
            </div><!-- /.col -->


        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
