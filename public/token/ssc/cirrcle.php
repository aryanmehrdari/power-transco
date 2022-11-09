<?php
session_start();
header("Content-type: text/css");

if ($_SESSION["csskey5"] != "myindex5") {
die(header("Location: /token/404.php"));
}

$_SESSION["csskey5"] = "thisiscss5";
?>

.item {
    position: relative;
    float: left;
}

.item h2 {
    text-align:center;
    position: absolute;
    line-height: 125px;
    width: 100%;
}

svg {
   -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
}

.circle_animation {
  stroke-dasharray: 440; /* this value is the pixel circumference of the circle */
  stroke-dashoffset: 440;
  transition: all 1s linear;
}
