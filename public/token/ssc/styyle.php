<?php
session_start();
header("Content-type: text/css");

if ($_SESSION["csskey6"] != "myindex6") {
die(header("Location: /token/404.php"));
}

$_SESSION["csskey6"] = "thisiscss6";
?>

@font-face{font-family:lovelyfont;src:url(Sarbaz.ttf)}body{padding:0;margin:0;font-family:sans-serif;background-size:cover}section{position:absolute;width:100%;height:100vh;overflow:hidden;animation:bgColor 20s linear infinite}
.bgPules{height:100%;widows:100%}
.bgPules span{position:absolute;width:80px;height:80px;background:#fff}
.bgPules span:nth-child(3n+1){background:0 0;border:5px solid #fff}
.bgPules span:nth-child(1){top:50%;left:20%;animation:animate 10s linear infinite}
.bgPules span:nth-child(2){top:80%;left:40%;animation:animate 12s linear infinite}
.bgPules span:nth-child(3){top:10%;left:65%;animation:animate 15s linear infinite}
.bgPules span:nth-child(4){top:50%;left:70%;animation:animate 6s linear infinite}
.bgPules span:nth-child(5){top:10%;left:30%;animation:animate 9s linear infinite}
.bgPules span:nth-child(6){top:90%;left:95%;animation:animate 8s linear infinite}
.bgPules span:nth-child(7){top:80%;left:5%;animation:animate 5s linear infinite}
.bgPules span:nth-child(8){top:35%;left:50%;animation:animate 14s linear infinite}
.bgPules span:nth-child(9){top:5%;left:5%;animation:animate 11s linear infinite}
.bgPules span:nth-child(10){top:25%;left:90%;animation:animate 10s linear infinite}

@keyframes animate{0%{transform:scale(0) translateY(0) rotate(0deg);opacity:1}100%{transform:scale(1) translateY(-100px) rotate(360deg);opacity:0}}
@keyframes bgColor{0%{background:#f44336}25%{background:#03a9f4}50%{background:#9c27bo}75%{background:#00ffa}100%{background:#f44336}}

#show_fall{width:100%;height:100vh;position:absolute}

.box{
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
width:400px;
padding:40px;
background:rgba(0,0,0,.8);
box-sizing:border-box;
box-shadow:0 15px 25px rgba(0,0,0,.5);
border-radius:10px
}

.box h2{
padding:0 0 30px;
margin:0;
color:#fff;text-align:center
}

.box .inputbox{
position:relative
}

.box .inputbox input{
width:100%;
padding:10px 0;font-size:16px;color:#fff;letter-spacing:1px;margin-bottom:30px;border:none;border-bottom:1px solid #fff;outline:none;background:0 0}.box .inputbox label{position:absolute;top:0;left:0;padding:10px 0;font-size:16px;color:#fff;letter-spacing:1px;pointer-events:none;transition:.5s}.box .inputbox input:focus~label,.box .inputbox input:valid~label{top:-18px;left:0;color:#03a9f4;font-size:12px}.box input[type=submit]{background:0 0;border:none;outline:none;color:#fff;background:#03a9f4;padding:10px 20px;cursor:pointer;border-radius:6px}
