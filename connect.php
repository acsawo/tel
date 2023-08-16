
<?php 
$host = "localhost" ; //HOST 
$username = "root" ; //username
$password = "1234" ;//password
$db = "test" ; // Database
$connect = mysql_connect($host,$username,$password) OR DIE ("HOST  / Unable to connect to database") ;
mysql_select_db($db) OR DIE ("DataBase  / Unable to select database");
mysql_query("SET NAMES UTF8"); 

?>