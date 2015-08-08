

<?php
  mysql_connect("innovationcet.db.10761972.hostedresource.com","innovationcet","inno@1Blitz");
  mysql_select_db("innovationcet");
 //mysql_query("create table student (name varchar(20),reg int,mark int,result varchar(10),primary key(reg))");
 // mysql_query("insert into student (name,reg,mark,result)values('Jithin','88131081','98','Pass')");
  mysql_query("insert into student values('Faseela','88131062','89','Pass')");
  
  //mysql_query("DROP table student");
  $res=mysql_query("select *from student");
  print "<hr>";
  while($row=mysql_fetch_array($res))
   {
    echo $row['name']."</br>";
    echo $row['reg']."</br>";
    echo $row['mark']."</br>";
    echo $row['result']."</br>";
    print "<hr>";
   }
/*
 $Query = "CREATE TABLE  smartcalendar (eventId VARCHAR( 25 ) NOT NULL ,eventName VARCHAR( 75 ) NOT NULL ,description VARCHAR( 100 ) NOT NULL ,startTime DATETIME NOT NULL ,endTime DATETIME NOT NULL ,PRIMARY KEY(eventId))";
echo mysql_query($Query);

 $Query = "INSERT INTO  smartcalendar (eventId ,eventName,description,startTime ,endTime)VALUES ('INV1',  'INV1',  'Inauguration of Innovation center CET ',  '2014-07-26 18:31:59',  '2014-07-27 18:32:02' ";
echo mysql_query($Query);

 $res=mysql_query("select *from smartcalendar"); 
 print($res);
  print "<hr>";
  while($row=mysql_fetch_array($res))
   {
    echo $row['eventId']."</br>";
    echo $row['eventName']."</br>";
    echo $row['startTime']."</br>";
    echo $row['endTime']."</br>";
    print "<hr>";
   }
echo mysql_close($con)  . "<br/>";
*/
?>