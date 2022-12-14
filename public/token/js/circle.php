<?php
session_start();
header("Content-type: text/javascript");

if ($_SESSION["jskey1"] != "0myindex1") {
die(header("Location: /404.php"));
}

$_SESSION["jskey1"] = "thisisjava1";
?>

/**
* The setTimeout({},0) is a workaround for what appears to be a bug in StackSnippets.
* It should not be required. See JSFiddle version.
*/

setTimeout(function() { 

  var time = 60; /* how long the timer will run (seconds) */
  var initialOffset = '440';
  var i = 1

  /* Need initial run as interval hasn't yet occured... */
  $('.circle_animation').css('stroke-dashoffset', initialOffset-(1*(initialOffset/time)));

  var interval = setInterval(function interval() {
      $('h2').text(i);
      if (i == time) {
    	clearInterval(interval);
        return;
      }
      $('.circle_animation').css('stroke-dashoffset', initialOffset-((i+1)*(initialOffset/time)));
      i++;  
  }, 1000);

}, 0)

function stoptimer(){
	clearInterval(interval);
}
