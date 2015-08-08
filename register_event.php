<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Event registration Innovation centre CET</title>
<link href="style/960.css" rel="stylesheet" type="text/css" />
<link href="style/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/min.js"></script>
<script  type="text/javascript" src="js/script.js"></script>
</head>

<body>

<!--container_12 start here-->
<div class="container_12"> 
  
  <!--grid_12 start here-->
  <div class="grid_12"> 
    
    <!--logo_container start here-->
    <div id="logo_container"> <a href="#" id="logo"></a>
      <div class="clear"></div>
      <div class="tag_line">Innovation centre CET tag line</div>
    </div>
    <!--logo_container end here-->
    
          <?php
include ('main_menu_about.php') ;
?>
  </div>
  <!--grid_12 end here-->
  
  <div class="clear"></div>
  
  <!--grid_12 start here-->
  <div class="grid_12">
    <ul id="q_nav">
      <li><a href="index.html">home</a></li>
      <li><a href="#">/</a></li>
         <li><a href="#">Admin /</a></li>
      <li><a href="#"  class="active">Register event</a></li>
    </ul>
    <div class="clear"></div>
    <hr />
  </div>
  <!--grid_12 end here-->
  <div class="clear"></div>
  
  <!--grid_12 start here-->
  <div class="grid_12"> 
 
    <!--main_heading start here-->
    <div class="main_heading">
      <h2>Innovation centre CET<font class="pink"> event management </font>form</h2>
    </div>
    
              <?php
include ('event_table.php') ;
?>
   
    </div>
    <!--text_container end here--> 
  </div>
  <!--grid_9 end here--> 
  
  <!--grid_3 start here-->
  
  <div class="grid_3">
  <?php
include ('create_event.php') ;
?>
 
  </div>
  
  
  <!--grid_3 end here-->
  
  <div class="clear">

   </div>
  
  <!--grid_12 start here-->
  
  <?php
include ('footer.php') ;
?>
  <!--grid_12 start here-->
  
  <div class="clear"></div>
</div>
<!--container_12 end here-->

</body>
</html>
