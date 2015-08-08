<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Portfolio</title>
<link href="style/960.css" rel="stylesheet" type="text/css" />
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link href="style/fancybox.css" rel="stylesheet" type="text/css" />
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
      <div class="tag_line">Innovation centre CET</div>
    </div>
    <!--logo_container end here-->
              <?php
include ('main_menu_gallary.php') ;
?>
    
  </div>
  <!--grid_12 end here-->
  <div class="clear"></div>
  
  <!--grid_12 start here-->
  <div class="grid_12">
    <ul id="q_nav">
      <li><a href="index.html">home</a></li>
      <li><a href="#">/</a></li>
      <li><a href="#"  class="active">Images</a></li>
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
      <h2>Innovation centre <font class="pink">CET</font>, College of Engineering
        Trivandrum</h2>
    </div>
    <!--main_heading end here--> 
    
  </div>
  <!--grid_12 end here--> 
  
  <!--grid_9 start here-->
  <div class="grid_12">
    <div id="main">
      <ul id="filtering-nav">
        <li><a class="interactive" href="#interactive">Title</a></li>
        <li><a class="identity" href="#identity">Photography</a></li>
        <li><a class="motion" href="#motion">Title</a></li>
        <li><a class="print" href="#print">Title</a></li>
        <li><a class="photography" href="#photography">Photography</a></li>
        <li><a class="all" href="#all">All</a></li>
      </ul>
      <div class="clear"></div>
      <div class="wrap_page columns_1"> <!-- masonry and filter wrapper -->
        
        <div class="portfolio_box interactive">
          <div class="wrap_image"> <img src="images/portfolio-single/gallery01.jpg" alt="Big Image"/> <a class="over_image" rel="fancyvimeo" href="http://vimeo.com/16699876" title="Alex Tank in 'Let's go get lost' by Isenseven // Vimeo Video">play vimeo</a> </div>
          <!-- end wrap_image div --> 
          
        </div>
        <!-- end portfolio_box div -->
        
        <div class="portfolio_box identity" >
          <div class="wrap_image"> <img src="images/portfolio-single/gallery02.jpg" alt="Big Image"/> </div>
          <!-- end wrap_image div --> 
          
        </div>
        <!-- end portfolio_box div -->
        
        <div class="portfolio_box motion nomarginright" >
          <div class="wrap_image"> <img src="images/portfolio-single/gallery03.jpg" alt="Motion" /> <a class="over_image" rel="fancyvimeo" href="http://vimeo.com/16699876" title="Alex Tank in 'Let's go get lost' by Isenseven // Vimeo Video">play vimeo</a> </div>
          <!-- end wrap_image div --> 
          
        </div>
        <!-- end portfolio_box div -->
        
        <div class="portfolio_box print">
          <div class="wrap_image"> <img src="images/portfolio-single/gallery04.jpg" alt="Big Image" /> </div>
          <!-- end wrap_image div --> 
          
        </div>
        <!-- end portfolio_box div -->
        
        <div class="portfolio_box photography">
          <div class="wrap_image"> <img src="images/portfolio-single/gallery05.jpg" alt="Big Image"/> </div>
          <!-- end wrap_image div --> 
          
        </div>
        <!-- end portfolio_box div -->
        
        <div class="portfolio_box motion nomarginright" >
          <div class="wrap_image"> <img src="images/portfolio-single/gallery07.jpg" alt="Motion" /> <a class="over_image" rel="fancyvimeo" href="http://vimeo.com/16699876" title="Alex Tank in 'Let's go get lost' by Isenseven // Vimeo Video">play vimeo</a> </div>
          <!-- end wrap_image div --> 
          
        </div>
      </div>
      <!-- end wrap_page column_2 div --> 
      
    </div>
    <!-- end wrap_page column_2 div --> 
    
  </div>
  <!--grid_9 end here-->
  
  <ul id="pagination" class="align-left">
    <li><b>Page 1 of 39</b> &nbsp; &nbsp;</li>
    <li class="pag_current"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">Last Page</a></li>
  </ul>
  <div class="clear"></div>
  
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
