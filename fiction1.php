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
Fiction Books
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
    left: 100px;">FICTION BOOKS</h1>
<font style="position: absolute;top: 150px; left: 100px">
<img src="w.png" height="250" width="250">

</font>

<h3 style="position: absolute;top: 30px;left: 900px;font-size:  30px;"><a href='1.php'>Back to Home page</a></h3>
<p style="position: absolute;top: 70px;left: 1000px;font-size:  30px;">VIEWS <?php echo $clicks; ?> times</p>
<h1 style="position: absolute;top: 150px;
    left: 400px;"><strong>Wherever It Leads</strong></h1>
<h2 style="position: absolute;
    top: 200px;
    left: 400px;">By Adriana Locke</h2>
<p style="font-family: Calibri;font-size:25px;color:green;position: absolute;top: 250px; left: 400px">Brynne Calloway knows that anything that seems too good to be true usually is. Fenton Abbott and his cashmere voice, Adonis body, and a magnetism like no other clearly falls into that category. But what’s life without a little risk?

</p>
<p style="font-family:Calibri;font-size: 25px;position: absolute;top: 350px; left: 600px"><a href="http://www.bestfree-book.net/Romance/Wherever_It_Leads.html" onclick="linkClick()">Start Reading</a></p>


<font style="position: absolute;top: 550px; left: 100px">
<img src="nancy.jpg.png" height="250" width="250">

</font>
<h1 style="position: absolute;top: 550px;
    left: 400px;"><strong>Maybe This Christmas</strong></h1>
<h2 style="position: absolute;
    top: 600px;
    left: 400px;">By Sarah Morgan</h2>
<p style="font-family: Calibri;font-size:25px;color:green;position: absolute;top: 650px; left: 400px">Sensible thirty-six-year-old Sophie Anderson has always known what to do. She knows her role in life: supportive wife of a successful architect and calm, capable mother of two. But on a warm winter night, as the house grows quiet around her and her children fall asleep, she wonders what’s missing from her life. </p>
<p style="font-family:Calibri;font-size: 25px;position: absolute;top: 800px; left: 600px"><a href="http://www.bestfree-book.net/Romance/Maybe_This_Christmas.html">Start Reading</a></p>


<font style="position: absolute;top: 950px; left: 100px">
<img src="norules.jpg" height="250" width="250">
</font>
<h1 style="position: absolute;top: 950px;
    left: 400px;"><strong>No Rules</strong></h1>
<h2 style="position: absolute;
    top: 1000px;
    left: 400px;">By Anita Savita</h2>
<p style="font-family: Calibri;font-size:25px;color:green;position: absolute;top: 1030px; left: 400px">
A marvellos and unpredictable love story. Two different people,who never imagine to be with because they live in different countries,different culture and different lifestyle.But the love can do anything and can make people to do anything.That is love,only love..... </p>
<p style="font-family:Calibri;font-size: 25px;position: absolute;top: 1150px; left: 600px"><a href="https://www.widbook.com/ebook/read/No-Rules">Start Reading</a></p>

<font style="position: absolute;top: 1350px; left: 100px">
<img src="drunktext.jpg" height="250" width="250">
</font>
<h1 style="position: absolute;top: 1350px;
    left: 400px;"><strong>Drunk Text</strong></h1>
<h2 style="position: absolute;
    top: 1400px;
    left: 400px;">By  Seventhswan</h2>
<p style="font-family: Calibri;font-size:25px;color:green;position: absolute;top: 1425px; left: 400px">
Gunnar wakes up in his dorm room on a Friday in April and notices three things in rapid succession. The most pressing is a text message that says "God, my ass hurts. I can't even sit down properly. Cheers to you. Coffee @ 1?" M/M slash. </p>
<p style="font-family:Calibri;font-size: 25px;position: absolute;top: 1550px; left: 600px"><a href="https://www.fictionpress.com/s/2894443/1/Drunk_Text">Start Reading</a></p>

</body>
</html>