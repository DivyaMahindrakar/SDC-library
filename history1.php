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
History Books
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
    left: 100px;">HISTORY BOOKS</h1>
<font style="position: absolute;top: 150px; left: 100px">
<img src="middlemarch.jpg" height="250" width="250">

</font>

<h3 style="position: absolute;top: 30px;left: 900px;font-size:  30px;"><a href='1.php'>Back to Home page</a></h3>
<p style="position: absolute;top: 70px;left: 1000px;font-size:  30px;">VIEWS <?php echo $clicks; ?> times</p>
<h1 style="position: absolute;top: 150px;
    left: 400px;"><strong> 
MiddleMarch
</strong></h1>
<h2 style="position: absolute;
    top: 200px;
    left: 400px;"> 
By George Eliot</h2>
<p style="font-family: Calibri;font-size:25px;color:green;position: absolute;top: 275px; left: 400px">George Eliot's gripping MiddleMarch heads up this month's Top Picks in History</p>
<p style="font-family:Calibri;font-size: 25px;position: absolute;top: 400px; left: 600px"><a href="https://archive.org/stream/middlemarchstudy01elioiala#page/n9/mode/2up">Start Reading</a></p>

<font style="position: absolute;top: 550px; left: 100px">
<img src="Henry.jpg" height="250" width="250">

</font>
<h1 style="position: absolute;top: 550px;
    left: 400px;"><strong>The Tragic Muse</strong></h1>
<h2 style="position: absolute;
    top: 600px;
    left: 400px;">
By Henry James</h2><br>
<p style="font-family: Calibri;font-size:25px;color:green;position: absolute;top: 675px; left: 400px">From the acclaimed, best-selling author Henry James, a sweeping history of the War and fidelity, told through a dozen characters, making a niche in the world history: a tale of idealism, heartbreaking suffering, and a noble cause that failed </p>
<p style="font-family:Calibri;font-size: 25px;position: absolute;top: 800px; left: 600px"><a href="https://archive.org/stream/thetragicmuse01jamerich">Start Reading</a></p>


<font style="position: absolute;top: 950px; left: 100px">
<img src="titanic.jpg" height="250" width="250">

</font>
<h1 style="position: absolute;top: 950px;
    left: 400px;"><strong>The loss of the SS Titanic : its story and its lessons</strong></h1>
<h2 style="position: absolute;
    top: 1050px;
    left: 400px;">
 Beesley, Lawrence</h2><br>
<p style="font-family: Calibri;font-size:25px;color:green;position: absolute;top: 1060px; left: 400px">Whoever reads the account of the cries that came to us afloat on the sea from those sinking in the ice-cold water must remember that they were addressed to him just as much as to those who heard them, and that the duty, of seeing that reforms are carried out devolves on every one who knows that such cries were heard in utter helplessness the night the Titanic sank. </p>
<p style="font-family:Calibri;font-size: 25px;position: absolute;top: 1200px; left: 600px"><a href="https://archive.org/details/lossofsstitanici00bees">Start Reading</a></p>

<font style="position: absolute;top:1350px; left: 100px">
<img src="indiahistory.jpg" height="250" width="250">

</font>
<h1 style="position: absolute;top: 1350px;
    left: 400px;"><strong>India: A History!</strong></h1>
<h2 style="position: absolute;
    top: 1400px;
    left: 400px;">John Keay</h2>
<p style="font-family: Calibri;font-size:25px;color:green;position: absolute;top: 1450px; left: 400px">HISTORIES OF INDIA often begin with a gripe about the poverty of the available sources.
These sources were once thought so inadequate as to make what is certainly one of theworld’s longest histories also one of its more patchy. ‘Prior to the thirteenth century AD,’wrote Professor R.C. Majumdar in the 1950s, ‘we possess no historical text of any kind,much less such a detailed narrative as we possess in the case of Greece, Rome or China.’Majumdar cited the thirteenth century because that was when northern India,succumbing to Muslim rule, attracted the attention of partisan writers keen to chroniclethe triumphs of Islam. But given a good four thousand years of earlier pre-Islamiccivilisation, it followed that for more than 80 per cent of attestable Indian history therewere no histories.......
 </p>
<p style="font-family:Calibri;font-size: 25px;position: absolute;top: 1750px; left: 600px"><a href="https://muftbooks.files.wordpress.com/2014/12/india-a-history-john-keay.pdf">Start Reading</a></p>





</body>
</html>