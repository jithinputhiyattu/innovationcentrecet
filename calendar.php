
<?php

  function isThereAnyEvent($statDTime,$endDTime)
  {	
	$Query ="SELECT * FROM smartcalendar WHERE ".
	"(( startTime <= '".$statDTime . "' AND endTime >= '".$statDTime ."') OR (startTime > '".$statDTime . "' AND startTime <= '".$endDTime ."'))";
    $resultSet = mysql_query($Query);

	$resultCount = mysql_num_rows( $resultSet);
	if( FALSE ==  $resultCount || 0 == $resultCount   )
	{ 
	   return false;  	
	 }
    return true;
   }
   
 function isSpecialDate($currentDate)
 {
	  $currentStartTime =  $currentDate." 00:00";
      $currentEndTime   =  $currentDate." 23:59";
	  return isThereAnyEvent( $currentStartTime,  $currentEndTime );
 }
 function connectDB()
 {
  mysql_connect("innovationcet.db.10761972.hostedresource.com","innovationcet","inno@1Blitz");
  mysql_select_db("innovationcet");
 } 
?>
<?php
connectDB();
$monthNames = Array("January", "February", "March", "April", "May", "June", "July",
"August", "September", "October", "November", "December");
?>
<?php
if (!isset($_REQUEST["month"])) $_REQUEST["month"] = date("n");
if (!isset($_REQUEST["year"])) $_REQUEST["year"] = date("Y");
?>
<?php
$cMonth = $_REQUEST["month"];
$cYear = $_REQUEST["year"];
 
$prev_year = $cYear;
$next_year = $cYear;
$prev_month = $cMonth-1;
$next_month = $cMonth+1;
 
if ($prev_month == 0 ) {
    $prev_month = 12;
    $prev_year = $cYear - 1;
}
if ($next_month == 13 ) {
    $next_month = 1;
    $next_year = $cYear + 1;
}
?>


<section id="box"> 
<div id="titleBar" >
List of registred events
</div>
<div id="closeBtn" > <img src="images/close.png" width="100%" /></div>


<div id="popup"></div></section>
<table  border="0">
<tr align="center">
<td  style="color:#445566;" >
<!---->
<table width="100%" border="0" cellspacing="0" cellpadding="0" >

<tr>
<td width="25%" align="center">  <a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $prev_month 
. "&year=" . $prev_year; ?>" style="color:#cccccc"><img src="images/previous.png" style="margin:2px" /> </a></td>

<td width="50%" align="center" style="color:#ff0000" ><h2><?php echo $monthNames[$cMonth-1].' '.$cYear; ?></h2></td>


<td width="25%" align="center" ><a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $next_month 
. "&year=" . $next_year; ?>" style="color:#FFFFFF">
<img src="images/next.png" style="margin:2px" / ></a>  </td>
</tr>

</table>


</td>
</tr>
<tr>
<td align="center">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<!--<tr align="center">
<td colspan="7" bgcolor="" style="color:#FF0000" ><h2><?php echo $monthNames[$cMonth-1].' '.$cYear; ?></h2></td>
</tr>-->
<tr>
<td align="center"><strong><img src="images/sunday.png"/></strong></td>
<td align="center"><strong><img src="images/monday.png"/></strong></td>
<td align="center"><strong><img src="images/tuesday.png"/></strong></td>
<td align="center"><strong><img src="images/wednesday.png"/></strong></td>
<td align="center"><strong><img src="images/thursday.png"/></strong></td>
<td align="center"><strong><img src="images/friday.png"/></strong></td>
<td align="center"><strong><img src="images/saturday.png"/></strong></td>
</tr>
<?php
$timestamp = mktime(0,0,0,$cMonth,1,$cYear);
$maxday = date("t",$timestamp);
$thismonth = getdate ($timestamp);
$startday = $thismonth['wday'];
for ($i=0; $i<($maxday+$startday); $i++)
 {
    if(($i % 7) == 0 ) echo "<tr>";
    if($i < $startday) echo "<td></td>";
	
    else 
	{
		$currentDate = $cYear ."-". $cMonth."-". ($i - $startday + 1);
		if(isSpecialDate($currentDate ))
		{
			echo "<td class='datex' align='center' valign='middle' height='50px'  style='color:#FF0000; width:175px;'><h1>".
			"<a class='poplink' style='text-decoration: none; color:#ff0000;' href='event_viewer.php" . "?month=". $cMonth . "&year=" . $cYear . "&day=" 
			. ($i - $startday + 1) . "'> ". ($i - $startday + 1) . "</a></h1></td>";
		}
		else
		{
			echo "<td align='center' valign='middle' height='50px'  style='color:#000000; width:175px;'><h3>".
		 ($i - $startday + 1) . "</h3></td>";
		}
	}
	if(($i % 7) == 6 ) echo "</tr>";
}
?>
</table>
</td>
</tr>
</table>

