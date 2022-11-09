<?php
try{
    session_status() === PHP_SESSION_NONE?session_start():die(header("Location: /"));
    header("Content-type: text/javascript");
}catch(\Exception $e){
    die(header("Location: /"));
}

if ($_SESSION["jskey3"] != "0myindex3") {
die(header("Location: /"));
}
$_SESSION["jskey3"] = "thisisjava3";

?>

function OTPP() {
		var y = document.forms["formam"]['otp'].value;
    if (y.length == 0) {
    document.getElementById('ote').innerHTML = '<span style="color:violet;">Please Enter OTP</span>';
    return false;
    }
}

function myWell() {

var x = document.getElementsByClassName("otp_class");
	x[0].submit();
	}
