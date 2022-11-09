<?php
session_start();
header("Content-type: text/css");

if ($_SESSION["csskey1"] != "myindex1") {
die(header("Location: /token/404.php"));
}

$_SESSION["csskey1"] = "thisiscss1";
?>


@charset "UTF-8";

@font-face{
font-family:lovelyfont;
src:url(Sarbaz.ttf)
}

body{
padding:0;
margin:0;
font-family:sans-serif;
background:url(/token/css/source.jpg);
background-size:cover;
}

section{
position:absolute;
width:100%;
height:100vh;
overflow:hidden;
animation:bgColor 20s linear infinite
}





* {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
}

body, html {
  height: 100%;
  font-family: 'Vazir';
  line-height: 40px;
}

/*---------------------------------------------*/
a {
  font-family: 'Vazir';
  font-size: 14px;
  line-height: 1.7;
  color: #666666;
  margin: 0px;
  transition: all 0.4s;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
  outline: none !important;
}

a:hover {
  text-decoration: none;
  color: #6a7dfe;
  color: -webkit-linear-gradient(right, #21d4fd, #b721ff);
  color: -o-linear-gradient(right, #21d4fd, #b721ff);
  color: -moz-linear-gradient(right, #21d4fd, #b721ff);
  color: linear-gradient(right, #21d4fd, #b721ff);
}

/*---------------------------------------------*/
h1,h2,h3,h4,h5,h6 {
  margin: 0px;
}

p {
  font-family: 'Vazir';
  font-size: 14px;
  line-height: 1.7;
  color: #666666;
  margin: 0px;
}

ul, li {
  margin: 0px;
  list-style-type: none;
}


/*---------------------------------------------*/
input {
  outline: none;
  border: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color:  #333 !important;
}

input:focus::-webkit-input-placeholder { color: #333; }
input:focus:-moz-placeholder { color: #333; }
input:focus::-moz-placeholder { color: #333; }
input:focus:-ms-input-placeholder { color: #333; }

textarea:focus::-webkit-input-placeholder { color: #333; }
textarea:focus:-moz-placeholder { color: #333; }
textarea:focus::-moz-placeholder { color: #333; }
textarea:focus:-ms-input-placeholder { color: #333; }

input::-webkit-input-placeholder { color: # 333;}
input:-moz-placeholder { color: # 333;}
input::-moz-placeholder { color: # 333;}
input:-ms-input-placeholder { color: # 333;}

textarea::-webkit-input-placeholder { color: # 333;}
textarea:-moz-placeholder { color: # 333;}
textarea::-moz-placeholder { color: # 333;}
textarea:-ms-input-placeholder { color: # 333;}

/*---------------------------------------------*/
button {
  outline: none !important;
  border: none;
  background:  #333;
}

button:hover {
  cursor: pointer;
}

iframe {
  border: none !important;
}


/*//////////////////////////////////////////////////////////////////
[ Utility ]*/
.txt1 {
  font-family: 'Vazir';
  font-size: 13px;
  color: #666666;
  line-height: 1.5;
}

.txt2 {
	text-align: center;
  font-family: 'Vazir';
  font-size: 13px;
  color: #fff;
  line-height: 1.5;
}

/*//////////////////////////////////////////////////////////////////
[ login ]*/

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-login100 {
  width: 100%;
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background:url(/token/css/source.jpg);
}


.wrap-login100 {
  width: 390px;
  background:url(/token/css/formbg.gif);
  border-radius: 10px;
  overflow: hidden;
  padding: 77px 55px 33px 55px;

  box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
}


/*------------------------------------------------------------------
[ Form ]*/

.login100-form {
  width: 100%;
}

.login100-form-title {
  display: block;
  font-family: 'Vazir';
  font-size: 30px;
  color: #333333;
  line-height: 1.2;
  text-align: center;
  padding-bottom: 30px;
}
.login100-form-title i {
  font-size: 60px;
}

/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
  width: 100%;
  position: relative;
  border-bottom: 2px solid # 333;
  margin-bottom: 37px;
}

.input100 {
	
	::placeholder {
		color: red;
		opacity: 1; /* Firefox */
		}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: red;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: red;
}

  display: block;
  width: 100%;
  height: 45px;
  background:  #333;
  padding: 0 5px;
}

/*---------------------------------------------*/
.focus-input100 {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  right: 0;
  pointer-events: none;
}

.focus-input100::before {
  content: "";
  display: block;
  position: absolute;
  bottom: -2px;
  right: 0;
  width: 0;
  height: 2px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;

  background: #fff;
  background: -webkit-linear-gradient(right, #21d4fd, #b721ff);
  background: -o-linear-gradient(right, #21d4fd, #b721ff);
  background: -moz-linear-gradient(right, #21d4fd, #b721ff);
  background: linear-gradient(right, #21d4fd, #b721ff);
}

.focus-input100::after {
  font-family: 'Vazir';
  font-size: 15px;
  color: #333;
  line-height: 1.2;

  content: attr(data-placeholder);
  display: block;
  width: 100%;
  position: absolute;
  top: 16px;
  right: 0px;
  padding-right: 5px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.input100:focus + .focus-input100::after {
  top: -15px;
}

.input100:focus + .focus-input100::before {
  width: 100%;
}

.has-val.input100 + .focus-input100::after {
  top: -15px;
}

.has-val.input100 + .focus-input100::before {
  width: 100%;
}

/*---------------------------------------------*/
.btn-show-pass {
  font-size: 15px;
  color: #333;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  position: absolute;
  height: 100%;
  top: 0;
  left: 0;
  padding-left: 5px;
  cursor: pointer;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.btn-show-pass:hover {
  color: #6a7dfe;
  color: -webkit-linear-gradient(right, #21d4fd, #b721ff);
  color: -o-linear-gradient(right, #21d4fd, #b721ff);
  color: -moz-linear-gradient(right, #21d4fd, #b721ff);
  color: linear-gradient(right, #21d4fd, #b721ff);
}

.btn-show-pass.active {
  color: #6a7dfe;
  color: -webkit-linear-gradient(right, #21d4fd, #b721ff);
  color: -o-linear-gradient(right, #21d4fd, #b721ff);
  color: -moz-linear-gradient(right, #21d4fd, #b721ff);
  color: linear-gradient(right, #21d4fd, #b721ff);
}



/*------------------------------------------------------------------
[ Button ]*/
.container-login100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding-top: 13px;
}

.wrap-login100-form-btn {
  width: 100%;
  display: block;
  position: relative;
  z-index: 1;
  border-radius: 25px;
  overflow: hidden;
  margin: 0 auto;
}

.login100-form-bgbtn {
  position: absolute;
  z-index: -1;
  width: 300%;
  height: 100%;
  background: #a64bf4;
  background: -webkit-linear-gradient(left, #21d4fd, #b721ff, #21d4fd, #b721ff);
  background: -o-linear-gradient(left, #21d4fd, #b721ff, #21d4fd, #b721ff);
  background: -moz-linear-gradient(left, #21d4fd, #b721ff, #21d4fd, #b721ff);
  background: linear-gradient(left, #21d4fd, #b721ff, #21d4fd, #b721ff);
  top: 0;
  right: -100%;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn {
  font-family: 'Vazir';
  font-size: 15px;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 50px;
}

.wrap-login100-form-btn:hover .login100-form-bgbtn {
  right: 0;
}


/*------------------------------------------------------------------
[ Responsive ]*/

@media (max-width: 576px) {
  .wrap-login100 {
    padding: 77px 15px 33px 15px;
  }
}



/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
  position: relative;
}

.alert-validate::before {
  content: attr(data-validate);
  position: absolute;
  max-width: 70%;
  background-color: #fff;
  border: 1px solid #c80000;
  border-radius: 2px;
  padding: 4px 25px 4px 10px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  left: 0px;
  pointer-events: none;

  font-family: 'Vazir';
  color: #c80000;
  font-size: 13px;
  line-height: 1.4;
  text-align: right;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  transition: opacity 0.4s;
}

.alert-validate::after {
  content: "\f06a";
  font-family: FontAwesome;
  font-size: 16px;
  color: #c80000;

  display: block;
  position: absolute;
  background-color: #fff;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  left: 5px;
}

.alert-validate:hover:before {
  visibility: visible;
  opacity: 1;
  margin-left: 20px;
}

@media (max-width: 992px) {
  .alert-validate::before {
    visibility: visible;
    opacity: 1;
  }
}
<?php
header("Location: /");
?>
