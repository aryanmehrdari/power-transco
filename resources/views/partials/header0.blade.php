<div class="row text-center top_header">

    <div class="col-md-4">
        <a class="btn btn-primary" href="/ads-list">لیست آگهی ها</a>
    </div>
    <div class="col-md-4">
        <a class="btn btn-danger" href="/register-ad-form">ثبت آگهی</a>
    </div>

    <div class="col-md-4">
        <a class="btn btn-warning" href="/">خانه</a>
    </div>

</div>


<div class="row text-center searchBox">

    <div class="col-md-2 hidden-xs"></div>

    <form action="/search" method="get">

        <div class="col-md-6 col-xs-12">
            <input value="{{isset($q) ? $q : '' }}" class="form-control searchField" type="text" name="ad_search_query"
                   id="ad_search_query">
            <div class="ajax_search_sug">
                <ul>

                </ul>
            </div>
        </div>

        <div class="col-md-1 pl-0">
            <button class="btn btn-primary">Search</button>
        </div>
    </form>


</div>



