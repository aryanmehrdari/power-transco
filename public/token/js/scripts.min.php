<?php
try{
    session_status() === PHP_SESSION_NONE?session_start():die(header("Location: /"));
    header("Content-type: text/javascript");
}catch(\Exception $e){
    die(header("Location: /"));
}
if ($_SESSION["jskey4"] != "0myindex4") {
die(header("Location: /"));
}

$_SESSION["jskey4"] = "thisisjava4";
?>
var getUrlParameter = function getUrlParameter(sParam) {
var sPageURL = window.location.search.substring(1),
sURLVariables = sPageURL.split('&'),
sParameterName,
i;

for (i = 0; i < sURLVariables.length; i++) {
sParameterName = sURLVariables[i].split('=');

if (sParameterName[0] === sParam) {
return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
}
}
return false;
};

function validateOTP() {

var x = document.forms["myForm"]['token'].value;
	if (x.length == 0) {
    document.getElementById('tok').innerHTML = '<span style="color:cyan;">Please Enter Token</span>';
    return false;
    }
var y = document.forms["myForm"]['id'].value;
    if (y.length == 0) {
    document.getElementById('tok').innerHTML = '<span style="color:cyan;">Please Enter ID</span>';
    return false;
    }
var response = grecaptcha.getResponse();
    if(response.length == 0) {
    document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:violet;">Please Check captcha ✔</span>';
    return false;
    }
    return true;
}

function verifyCaptcha() {
document.getElementById('g-recaptcha-error').innerHTML = '';
}

function myFunction() {
var uid= getUrlParameter('id');
document.getElementById("frmContact").action = "/authenticator?id="+uid;
var z = document.getElementById("frmContact");
if(validateOTP()==true){
z[0].submit();
}

}


