
<?php
$sidebar_cats=\App\Models\Cat::where("is_deleted",0)->get();
?>

<div>


    <ul class="sidebar-ul">

        @foreach($sidebar_cats as $cat)
            <li>
                <a href="/ad-cat/{{$cat->id}}">{{$cat->title}}</a>
            </li>
        @endforeach

    </ul>



</div>
