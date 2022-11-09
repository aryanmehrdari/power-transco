<nav class="navbar navbar-expand-lg fixed-top trans-navigation">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" class="img-fluid b-logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars"></i>
                </span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
            <ul class="navbar-nav ">


                <?php

                $menuObject = \App\Models\Menu::orderBy("priority", "ASC")->get();


                ?>


                @foreach($menuObject as $menuItem)

                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="{{$menuItem->url}}">{{$menuItem->title}}</a>
                    </li>

                @endforeach


            </ul>
        </div>
    </div>
</nav>
<!--MAIN HEADER AREA END -->
