<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sdclibrary";
 
session_start();

$curPage = mysql_real_escape_string(htmlspecialchars($_SERVER['PHP_SELF']));
 

$clicks = 0;
if($_SESSION['page']!= $curPage) {
   $_SESSION['page'] = $curPage;
   if(!$link = mysql_connect($host, $user, $pass)) {
      echo "Could not connect to MySQL server. Check your login information; the MySQL server may also be offline or temporarily overloaded.";
   }
  elseif(!mysql_select_db($dbname)) {
      echo "Cannot select database.";
   }
   else {
      if(!$rs = mysql_query("SELECT * FROM click_count WHERE page_url = '$curPage'")) {
         echo "Could not parse click counting query.";
      }
      elseif(mysql_num_rows($rs) == 0) {
         if(!$rs = mysql_query("INSERT INTO click_count (page_url, page_count) VALUES ('$curPage', 1)")) {
            echo "Could not create new click counter for this page.";
         }
         else {
            $clicks = 1;
         }
      }
      else {
         $row = mysql_fetch_array($rs);
         $clicks = $row['page_count'] + 1;
         if(!$rs = mysql_query("UPDATE click_count SET page_count = $clicks WHERE page_url = '$curPage'")) {
            echo "Could not save new click count for this page.";
         }
      }
   }
}
?>


<html>
<title>
Crime Books
</title>

<style >
	
	h1 {
    color:black;
    font-size:  30px;
    font-family: "Castellar";
    font-style: italic;
    font-weight: bold;
    
    
}

h2{
	color:red;
    font-size:  20px;
    font-family: "Castellar";
    font-style: italic;
    font-weight: bold;
    position: absolute;
    top: 200px;
    left: 400px;
}


</style>
	


<body bgcolor="pink">
<h1 style="color:blue;
    font-size:  50px;
    font-family: Lucida Handwriting;
    font-style: italic;
    font-weight: bold;
    position: absolute;
    top: 0px;
    left: 100px;">CRIME BOOKS</h1>
<font style="position: absolute;top: 150px; left: 100px">
<img src="high.png" height="250" width="250">

</font>
<h3 style="position: absolute;top: 30px;left: 900px;font-size:  30px;"><a href='1.php'>Back to Home page</a></h3>
<p style="position: absolute;top: 70px;left: 1000px;font-size:  30px;">VIEWS <?php echo $clicks; ?> times</p>
<h1 style="position: absolute;top: 150px;
    left: 400px;"><strong>The Highway</strong></h1>
<h2 style="position: absolute;
    top: 200px;
    left: 400px;">
By C.J. Box</h2>
<p style="font-family: Calibri;font-size:25px;color:green;position: absolute;top: 250px; left: 400px">Jimmy is a victim.  Seven years ago, carefree college student Jimmy was kidnapped while on spring break. For 472.</p>
<p style="font-family:Calibri;font-size: 25px;position: absolute;top: 350px; left: 600px"><a href="http://www.freebookol.net/The_Highway/index.html">Start Reading</a></p>

<font style="position: absolute;top: 550px; left: 100px">
<img src="inh.png" height="250" width="250">

</font>
<h1 style="position: absolute;top: 550px;
    left: 400px;"><strong>Inherit the Dead</strong></h1>
<h2 style="position: absolute;
    top: 600px;
    left: 400px;">
By Jonathan Santlofer</h2>
<p style="font-family: Calibri;font-size:25px;color:green;position: absolute;top: 650px; left: 400px">New York Times–bestselling author Jonathan Santlofer returns with a suspenseful intriguing novel.</p>
<p style="font-family:Calibri;font-size: 25px;position: absolute;top: 800px; left: 600px"><a href="http://www.any-read.net/view/4593.html">Start Reading</a></p>


<font style="position: absolute;top: 950px; left: 100px">
<img src="sherlock.jpg" height="250" width="250">

</font>
<h1 style="position: absolute;top: 950px;
    left: 400px;"><strong>The Adventures of Sherlock Holmes</strong></h1>
<h2 style="position: absolute;
    top: 1000px;
    left: 400px;">
By Sir Arthur Conan Doyle</h2>
<p style="font-family: Calibri;font-size:25px;color:green;position: absolute;top: 1050px; left: 400px">The Adventures of Sherlock Holmes is a collection of twelve short stories by Arthur Conan Doyle, featuring his fictional detective Sherlock Holmes.The first story, "A Scandal in Bohemia", includes the character of Irene Adler, who, despite being featured only within this one story by Doyle, is a prominent character in modern Sherlock Holmes adaptations, generally as a love interest for Holmes..........</p>
<p style="font-family:Calibri;font-size: 25px;position: absolute;top:1200px; left: 600px"><a href="http://www.bookrix.com/book.html?bookID=gunnar_1185299233.1039938927#558,558,243936">Start Reading</a></p>



<font style="position: absolute;top: 1300px; left: 100px">
<img src="hunted.jpg" height="250" width="250">
</font>
<h1 style="position: absolute;top: 1300px;
    left: 400px;"><strong>Hunted Down</strong></h1>
<h2 style="position: absolute;
    top: 1350px;
    left: 400px;">
By Charles Dickens</h2>
<p style="font-family: Calibri;font-size:25px;color:green;position: absolute;top: 1400px; left: 400px">Most of us see some romances in life. In my capacity as Chief Manager of a Life Assurance Office, I think I have within the last thirty years seen more romances than the generality of men, however unpromising the opportunity may, at first sight, seem..........</p>
<p style="font-family:Calibri;font-size: 25px;position: absolute;top:1500px; left: 600px"><a href="https://ebooks.adelaide.edu.au/d/dickens/charles/d54hd/">Start Reading</a></p>



</body>
</html>