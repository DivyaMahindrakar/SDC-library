
<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sdclibrary";


session_start();

$curPage = mysql_real_escape_string(htmlspecialchars($_SERVER['PHP_SELF']));
 

$clicks = 0;
 if($_SESSION['page'] != $curPage) {
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
Biography Books
</title>
<head>
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
	
</head>

<body bgcolor="pink">
<h1 style="color:blue;
    font-size:  50px;
    font-family: Lucida Handwriting;
    font-style: italic;
    font-weight: bold;
    position: absolute;
    top: 0px;
    left: 100px;">BIOGRAPHY BOOKS</h1>
<font style="position: absolute;top: 150px; left: 100px">
<img src="alex.jpg" height="250" width="250">

</font>

<h3 style="position: absolute;top: 30px;left: 900px;font-size:  30px;"><a href='1.php'>Back to Home page</a></h3>
<p style="position: absolute;top: 70px;left: 1000px;font-size:  30px;">VIEWS <?php echo $clicks; ?> times</p>
<h1 style="position: absolute;top: 150px;
    left: 400px;"><strong>The wicked wit of Charles Dickens</strong></h1>
<h2 style="position: absolute;
    top: 200px;
    left: 400px;">Shelly Klein</h2>
<p style="font-family: Calibri;font-size:25px;color:green;position: absolute;top: 250px; left: 400px">Shelly Klein, the compiler,vividly describes the wicked wit of Charles Dickens with a modern application of his advices</p>
<p style="font-family:Calibri;font-size: 25px;position: absolute;top: 400px; left: 600px"><a href="https://archive.org/stream/americannotesfor01dickrich">Start Reading</a></p>

<font style="position: absolute;top: 550px; left: 100px">
<img src="rose.jpg" height="250" width="250">

</font>
<h1 style="position: absolute;top: 550px;
    left: 400px;"><strong>A Modern Chronicle</strong></h1>
<h2 style="position: absolute;
    top: 600px;
    left: 400px;">By Churchill</h2>
<p style="font-family: Calibri;font-size:25px;color:green;position: absolute;top: 650px; left: 400px">A Modern Chronicle is a 1910 best-selling novel by American writer Winston Churchill. The novel explores "the problem of the modern woman" and the effects of divorce, in a world driven by industrialization and business competition. </p>
<p style="font-family:Calibri;font-size: 25px;position: absolute;top: 800px; left: 600px"><a href="https://archive.org/stream/modernchroniclei00churuoft#page/n9/mode/2up">Start Reading</a></p>


<font style="position: absolute;top: 950px; left: 100px">
<img src="legacy.jpg" height="250" width="250">

</font>
<h1 style="position: absolute;top: 950px;
    left: 400px;"><strong>LEGACY: The Life Of Nikola Tesla</strong></h1>
<h2 style="position: absolute;
    top: 1000px;
    left: 400px;">By  Norma Brody</h2>
<p style="font-family: Calibri;font-size:25px;color:green;position: absolute;top: 1050px; left: 400px">This is the little-known story of Nikola Tesla, the discoverer of alternating current, the father of radar, robotics and wireless transmission. He changed the course of events worldwide but he was never given the accolades he deserved. </p>
<p style="font-family:Calibri;font-size: 25px;position: absolute;top: 1160px; left: 600px"><a href="http://www.authorsden.com/sampleworkspdf/26062.pdf">Start Reading</a></p>


<font style="position: absolute;top:1250px; left: 100px">
<img src="annefrank.jpg" height="250" width="250">

</font>
<h1 style="position: absolute;top: 1250px;
    left: 400px;"><strong>Anne Frank: The Diary of a Young Girl!</strong></h1>
<h2 style="position: absolute;
    top: 1300px;
    left: 400px;">By  Anne Frank and Otto Frank</h2>
<p style="font-family: Calibri;font-size:25px;color:green;position: absolute;top: 1350px; left: 400px">Anne Frank's The Diary of a Young Girl is among the most enduring documents of the twentieth century. Since its publication in 1947, it has been read by tens of millions of people all over the world. It remains a beloved and deeply admired testament to the indestructable nature of the human spirit.
 </p>
<p style="font-family:Calibri;font-size: 25px;position: absolute;top: 1500px; left: 600px"><a href="https://blog.shaharia.com/assets/download/Anne-Frank-The-Diary-Of-A-Young-Girl.pdf">Start Reading</a></p>




</body>
</html>