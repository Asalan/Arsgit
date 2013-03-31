<?php

/* con file
 */
$sqlhostname="localhost";
$sqlusername="root";
$sqlpassword="";
$sqldatabase="parent_feedback";
$con = mysql_connect($sqlhostname, $sqlusername, $sqlpassword) or die(mysql_error());
if($con)
{
   mysql_select_db($sqldatabase,$con); 
  
}
 else {
    print ("could not connect to the database");
}

//echo 'test';
?>
 