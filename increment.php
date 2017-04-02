<?php
if(@$_POST['id'])
{
$id=$_POST['id'];
$db=mysql_connect('localhost','root','');
mysql_select_db('sdclibrary',$db);
$sql="SELECT * FROM increment WHERE id='$id'";
$result=mysql_query($sql,$db);
$row=mysql_fetch_array($result);
$count=$row['count'];
$count+=1;
$sql="UPDATE increment SET count='$count' WHERE id='$id'";
$result=mysql_query($sql,$db);
}
else
echo "Access Forbidden";
?>