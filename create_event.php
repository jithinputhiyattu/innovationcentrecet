<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>

<body>
<?php

  function isPossiblePeriod($statDTime,$endDTime)
  {
    $currentDate = date('Y-m-d H:i:s');
  
	if ( $currentDate > $statDTime || $statDTime > $endDTime) 
	{
	  
	  return false;
	}
	$Query ="SELECT * FROM smartcalendar WHERE ".
	"(( startTime <= '".$statDTime . "' AND endTime >= '".$statDTime ."') OR (startTime > '".$statDTime . "' AND startTime <= '".$endDTime ."'))";
    $resultSet = mysql_query($Query);
	$resultCount = mysql_num_rows( $resultSet);
	if( FALSE ==  $resultCount || 0 == $resultCount   )
	{ 
	   return true;  	
	 }
    return false;
   }
   
 function connectDB()
 {
 mysql_connect("innovationcet.db.10761972.hostedresource.com","innovationcet","inno@1Blitz");
 mysql_select_db("innovationcet");
 } 
   

if($_REQUEST['btnCreate']) /*work only when create button is pressed*/
  {
	  if( "icioiioic" == $_REQUEST['icPassword'] )
	   {
		  $txtEventName = $_REQUEST['txtEventName'];;
		  $txaDescription =  $_REQUEST['txaDescription'];
		  $txtVenue = $_REQUEST['txtVenue'];
		  $timeStart =  $_REQUEST['timeStart'];
		  $dateStart =  $_REQUEST['dateStart'];
		  $timeEnd =  $_REQUEST['timeEnd'];
		  $dateEnd =  $_REQUEST['dateEnd'];
		  
		  connectDB();
		  $dateTStart = $dateStart ." ".  $timeStart;
		  $dateTEnd   = $dateEnd." ".$timeEnd;
		  if(true == isPossiblePeriod( $dateTStart,$dateTEnd ))
		  {
			 $Query = "insert into smartcalendar (eventId ,eventName ,description ,startTime ,endTime)".
			 "VALUES ('" . $txtEventName . "','".$txtEventName."','" .$txaDescription."','" .$dateTStart. "','".  $dateTEnd ."')" ;
			  mysql_query ($Query );
			  echo "<h3 style='color:#00ff00;'>Event created successfully</h3>";
		  }
		  else
		  {
			  echo "<h3 style='color:#ff0000;'>Creation canceled due to time conflict</h3>";
		  }
	   }
	   else
	   {
		   echo "<h3 style='color:#ff0000;'>Invalid password</h3>";
	   }
	}
 ?>


 <form name="createEvent" method="post" action="<?php echo basename($_SERVER['PHP_SELF']); ?>" >
  <table   cellpadding="2" cellspacing="2" width="275px" >
   
    <tr align="left">
      <th width="57" scope="col"> <h3>Name </h3></th>
      <th width="54" scope="col"><input type="text" name="txtEventName" size="26" Value="Inagruation"></th>
    </tr>
    <tr>
       <th align="left"><h3>Description</h3> </th>
       <td width="57" > <textarea   name="txaDescription" rows="7" cols='21' maxlength="200">Enter details about the new event</textarea> </td>
	   
    </tr>
	
     <tr>
   
     </tr>
	<tr align="left">
       <th width="57" scope="col"><h3>Venue</h3></th>
      <th width="54" scope="col"><input  type = "text" value="CGPU hall" name="txtVenue" size="26"></th>
    </tr>
	<tr align="left">
       <th width="57" scope="col"><h3>Start date</h3> </th>
      <th  scope="col"><input type="date" name="dateStart"	></th>
    </tr>
	<tr align="left">
       <th width="57" scope="col"><h3>Start time </h3></th>
      <th width="54" scope="col"><input type="time"  name="timeStart" cols='21'></th>
    </tr>
	<tr align="left">
       <th width="57" scope="col"><h3>End date </h3></th>
      <th width="54" scope="col"><input type="date"  name="dateEnd"></th>
    </tr>
	<tr align="left">
       <th width="57" scope="col"><h3>End time</h3> </th>
      <th width="54" scope="col"><input type="time" cols='21'  name="timeEnd" size="35"></th>
    </tr>
	
    
    <tr align="left">
       <th width="57" scope="col"><h3>Password</h3> </th>
      <th width="54" scope="col"><input type="password" cols='21'  name="icPassword" size="26"></th>
    </tr>
    
<tr align="right">
       <th width="57" scope="col"></th>
      <th width="54" scope="col"><input type='submit' name="btnCreate"></th>
    </tr>

  </table>
      
     </form>
</body>
</html>
