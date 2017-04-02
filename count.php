<?php
include('connect.php');
 
 mysql_query("UPDATE counter SET `views`=`views`+1 WHERE id='1'");
 ?>