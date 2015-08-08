<body>
 <?php
  $currentDate =  $_REQUEST['year'] . "-";
  $currentDate =  $currentDate .  $_REQUEST['month'] . "-";
  $currentDate =   $currentDate . $_REQUEST['day'];
  echo "<br/>";
  mysql_connect("innovationcet.db.10761972.hostedresource.com","innovationcet","inno@1Blitz");
 mysql_select_db("innovationcet");
  ?>
  <table  border ="1" cellpadding="3"  width="100%" style="border-color:#FFF;overflow:hidden;">
    <tr>
      <th  scope="col" width="155px">Event name </th>
      <th  scope="col" >Start time </th>
      <th  scope="col" >End time </th>
    </tr>
<?php
 /*echo $currentDate;*/
 $currentStartTime =  $currentDate." 00:00";
 $currentEndTime   =  $currentDate." 23:59";
 $Query ="SELECT * FROM smartcalendar WHERE "."(( startTime <= '".$currentStartTime . "' AND endTime >= '".$currentStartTime 
 ."') OR (startTime > '".$currentStartTime . "' AND startTime <= '".$currentEndTime ."'))";
    $resultSet = mysql_query($Query);
  while($row=mysql_fetch_array($resultSet))
   {
    echo "<tr><td>";
	echo  $row['eventName']. "</td><td>";
   	echo  $row['startTime']. "</td><td>";
	echo  $row['endTime']. "</td></tr>";
  };
?>		
</table>
</body>