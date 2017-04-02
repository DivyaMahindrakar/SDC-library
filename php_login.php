<?php
include "connect.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $email=$_POST['emailid'];
  $pass=$_POST['password'];
  $sql="select * from register where emailid=\"$email\" AND pass=\"$pass\"";
  $res=$conn->query($sql);
	 
  if($res->num_rows>0) 
  {
    $row=$res->fetch_assoc();
    $_SESSION['c']=1;
    $_SESSION['id']=$row['u_id'];
    header('Location: home.php');
	}
  else {  
    header('Location:2.html');
    
  }
}

?>
