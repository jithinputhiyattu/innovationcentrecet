<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

 <form name="createEvent" method="post" action="<?php echo basename($_SERVER['PHP_SELF']); ?>" >
     
 <h4>Select a date for listing the registred events <input type="date" name="dateCurrent"  <?php echo "value='". $_REQUEST['dateCurrent']."'"  ?>"/><input  name="btnSubmit" type="submit" value="Submit"/></h4>
  <div class="grid_13">
  
    <div class="text_container"> 
     <table width="100%" class="event_table">
  <tr>
   <th  colspan="4" style ="align:center;">
   <h4> List of registred events </h4>

   </th>
  </tr>
  <tr style="color:#ff0000;"> 
    <td   >Event name</td>
    <td>Discription</td>
    <td>Starting time </td>
    <td>Ending time </td>
  </tr>
  
  <?php
  if($_REQUEST['btnSubmit']) 
  {
  mysql_connect("innovationcet.db.10761972.hostedresource.com","innovationcet","inno@1Blitz");
  mysql_select_db("innovationcet");
	   $currentDate =  $_REQUEST['dateCurrent'];
	   $currentStartTime =  $currentDate." 00:00";
	   $currentEndTime   =  $currentDate." 23:59";
	
		$Query ="SELECT * FROM smartcalendar WHERE ".
		"(( startTime <= '".$currentStartTime . "' AND endTime >= '".$currentStartTime ."') OR (startTime > '".$currentStartTime
		 . "' AND startTime <= '".$currentEndTime ."'))";
		$resultSet = mysql_query($Query);
	   $flag = 0;
	  while($row=mysql_fetch_array($resultSet))
	   {
		switch(($flag % 3))
		  {
			  case 0 :
			  {
				  echo "<tr style='color:#ff00ff; font-size:15px; '> <td>";
				  break;
			  }
			  case 1 :
			  {
				   echo "<tr style='color:#0000ff; font-size:15px;'> <td>";
				    break;
			  }
			  default :
			  {
				   echo "<tr style='color:#00ffff; font-size:15px;'> <td>";
			  }
		  } 
		echo  $row['eventName']. "</td><td>";
		echo  $row['description']. "</td><td>";
		echo  $row['startTime']. "</td><td>";
		echo  $row['endTime']. "</td></tr>";
		$flag++;
	  };
  }
?>	
</table>
</form>
</body>
</html>