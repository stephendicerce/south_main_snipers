<!DOCTYPE html>
<html lang="en">
<head>
<title>South Main Hockey</title>
<meta charset="utf-8">
<script>
  var sw = window.screen.width;
  if(sw <= "480"){
        document.write('<link rel="stylesheet" href="msmcss.css">');}
  else{
        document.write('<link rel="stylesheet" href="smcss.css">');}
</script>
</head>
</head>

<body>

<div class="header">
<img class="logopic" src="/pics/logow.png" alt="Welcome" height="64" width="292"/>
<hr>

<div class="tab2">
<ul>
<li class="mnav1">
<a href="index.php">HOME</a>
</li>
<li class="selected mnav2">
<a href="videos.php">VIDEOS</a>
</li>
<li class="mnav3">
<a href="players.php">PLAYERS</a>
</li>
<li class="mnav4">
<a href="contact.php">CONTACT</a>
</li>
</ul>
</div>


</div>

<div class="wrap">

<div class="twitter">
     <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/NHL" data-widget-id="652977093127618560">Tweets by @NHL</a>
     <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

<div class="content">
<div class="para">

<?php
$directory = '/var/www/html/vids';
$videos = scandir($directory);
$videos = array_diff($videos, array('..','.'));
    foreach($videos as $vid){
	echo "<video width=\"100%\" height=\"100%\" controls>";
  	echo "<source src=/vids/$vid type=\"video/webm\">";
	echo "</video>";
	}
?>

</div>
</div>
</div>
</body>
</html>
