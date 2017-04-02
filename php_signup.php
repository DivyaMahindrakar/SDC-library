<?php
include "connect.php";
//if (isset($_POST['submit'])) {
$uname =$_POST['username'];
$pass =$_POST['password'];
$email =$_POST['emailid'];

$mob =$_POST['number'];
$city =$_POST['city'];



$sql = "INSERT INTO register(`username`, `pass`, `emailid`, `number`,`city`)
VALUES ('$uname','$pass','$email','$mob','$city')";
if ($conn->query($sql) === TRUE) {
    Header('Location:login.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
