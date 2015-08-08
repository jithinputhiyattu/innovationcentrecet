<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Abundant
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20090703

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Innovation Centre CET</title>
<meta name="keywords" content="Innovation Centre CET College of Engineering Trivandrum Robo CET" />
<meta name="description" content="Innovation Centre CET is a technical facility which started functioning in the college with main objective to tap the innovative ideas of the young minds" />


<link href="popup.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="js/cal.js" type="text/javascript"></script>
<link href="popup.css" rel="stylesheet" type="text/css" />
</head>

<center>
<body bgcolor="#FFFFFF" >
<div id="container" style="width:940px; "  >



<div  id="titleframe">

            
 <h1 style="color:#fff;padding-top:60px;">INNOVATION CENTRE CET</h1>
   <p >Go <a href="home.php"> back </a>to home </p>
   
</div>

<div id="menu" style="height:485px;width:530px;float:left; padding-top:20px;padding-left:20px;padding-right:20px;  ">

      <?php
include ('calendar.php') ;
?>
</div>

<div id="content" style="height:485px;width:314px;float:right;padding-top:20px;padding-left:20px;padding-right:20px; ">
    <?php
include ('news_feed.php') ;
?>
</div>

<div id="footer" style="clear:both;text-align:right; height:35px; color:#2A3F55; padding-top:5px;">
<h4>
Copyright notice,Designed and devoleped by dreamBlitzers </h4></div>
</div>

</body>
</center>


</html>
