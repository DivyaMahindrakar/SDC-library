
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$con=mysqli_connect("localhost","root","","sdc");
}
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>


<!DOCTYPE html>
<html>
<head><title>
	REGISTERATION
</title>
<link rel="stylesheet" type= "text/css" href="regis.css"></head>
<script>





function validateForm()
{
	var x = document.forms["myForm"]["username"].value;
    if (x == null || x == "") {
        alert("Username must be filled out");
        return false;
    }
	



 var emailID = document.forms["myForm"]["emailid"].value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID");
            return false;
         }

 var p = document.forms["myForm"]["number"].value;
    if (p == null || p == "") {
        alert("Mobile number must be filled out");
        return false;
    }else if(p.length<10){  
  alert("Mobile number should be 10 numbers!!");  
       return false;  
    }else if (isNaN(p)) {
    alert("Must input numbers");
    return false;
     }else{  
     return true;  
     }  
}


function validatePassword(fld) {
    var error = "";
    var illegalChars = /[\W_]/; // allow only letters and numbers
 
    if (fld.value == "") {
        
        error = "You didn't enter a password.\n";
        alert(error);
        return false;
 
    } else if ((fld.value.length < 7) || (fld.value.length > 15)) {
        error = "The password is the wrong length. \n";
        
        alert(error);
        return false;
 
    } else if (illegalChars.test(fld.value)) {
        error = "The password contains illegal characters.\n";
        
        alert(error);
        return false;
 
    } else if ( (fld.value.search(/[a-zA-Z]+/)==-1) || (fld.value.search(/[0-9]+/)==-1) ) {
        error = "The password must contain at least one numeral.\n";
        
        alert(error);
        return false;
 
    } else {
        fld.style.background = 'White';
    }
   return true;
}


function checkName()
{
re = /^[A-Za-z]+$/;
if(re.test(document.myForm.username.value))
{
return true;
}
else
{
	return false;
alert("Invalid Firstname");

}

}
</script>
<body >	
<font color="white">
	<center><h1><i><link rel="stylesheet"  href="shadow.css" ><br>REGISTERATION FORM</i></h1></center>
	
	<form name="myForm" method="post" action="php_signup.php" onsubmit="return validateForm()"><strong>
	USER NAME <font color=red>*</font>:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="username" maxlength="30" ><br><br><br>
	
	PASSWORD <font color=red>*</font>:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type= "password"  
	name="password" maxlength=8  onchange="return validatePassword(this.value)">
	<br>
	<br><br>
	<strong>EMAIL ADDRESS <font color=red>*</font>:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="emailid" size=40><br>
	<br><br>
		
		
	Mob No. <font color=red>*</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="text" name="number" maxlength="10" required>
	<br><br><br>
	SELECT YOUR CITY <font color=red>*</font>:&nbsp&nbsp&nbsp&nbsp&nbsp
			<select name="city" required>
			<option>Mumbai</option>
			<option>Pune</option>
			<option>Banglore</option>
			<option>Delhi</option>
			<option>Others</option>
			<br><br><br>
			</select>
			<br><br><br>
	<input type=reset value=RESET>
	&nbsp&nbsp
	<input type=submit value="SUBMIT" onClick="checkName()">

	

	<br><br><br>
	<font color= red>Information with * mark are compulsorily to be filled</font>



</body>
</html>
