
<?php
session_start();
if(isset($_SESSION['id']))
header('Location:login.php');
?>
<html>
<head>
<title>
 Login
 </title>
</head>
<link rel="stylesheet" type= "text/css" href="login.css">
<style>
h1 {
    color:purple;
    font-size:  30px;
    font-family: "Castellar";
    font-style: italic;
    font-weight: bold;
    position: absolute;
    top: 0px;
    left: 400px;
 }

h1, p {
margin-bottom: 10px;
}
strong {
font-weight: bold;
}
.uppercase { text-transform: uppercase; }

#login {
margin: 100px auto;
width: 400px;
}
form fieldset input[type="text"], input[type="password"] {
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
font-family: "Lucida Handwriting";
font-size: 14px;
height: 50px;
padding: 0px 10px;
width: 310px;

}
form fieldset input[type="submit"] {
background-color:blue;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
cursor: pointer;
font-family: "Lucida Handwriting";
height: 50px;
text-transform: uppercase;
width: 310px;
-webkit-appearance:none;
}
form fieldset 
form fieldset a:hover { text-decoration: underline; }

 </style>
<body> 
<div id="login">
<h1><strong>Welcome to the SDC Library</strong></h1>
<form method="post" action="php_login.php">
<fieldset>
<legend style="font-family:Lucida Handwriting;font-size: 25px">LOGIN</legend>
<p><input type="text" required name="emailid" placeholder="Emailid" ></p>
<p><input type="password" required name="password" placeholder="Password" ></p>

<p class="submit"><input type="submit" name="login" value="Login"></p>
</fieldset>
<p style="font-family:Lucida Handwriting;font-size: 20px"><a href="form.php">Create a new account</a></p>
</form>

</div> 
</body>
</html>
