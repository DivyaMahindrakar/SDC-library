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
Comedy Books
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
    left: 100px;">COMEDY BOOKS</h1>
<font style="position: absolute;top: 150px; left: 100px">
<img src="gab.jpg" height="250" width="250">

</font>
<h3 style="position: absolute;top: 30px;left: 900px;font-size:  30px;"><a href='1.php'>Back to Home page</a></h3>
<p style="position: absolute;top: 70px;left: 1000px;font-size:  30px;">VIEWS <?php echo $clicks; ?> times</p>
<h1 style="position: absolute;top: 150px;
    left: 400px;"><strong>Gabriel's Promise (A Romantic Comedy)(42)</strong></h1>
<h2 style="position: absolute;
    top: 200px;
    left: 400px;">
 By Jordan Silver  </h2>
<p style="font-family: Calibri;font-size:25px;color:green;position: absolute;top: 250px; left: 400px">Gabriel Sweeney is about to fulfill a promise long overdue; a promise made to an old army buddy who had been cut down in the same firefight that had put him in a coma for three months of his life. It might be six years late but better late than never right? Gabriel though having a rough idea of what’s left of Phil’s family from the many stories his old pal used to share is ...</p>
<p style="font-family:Calibri;font-size: 25px;position: absolute;top: 400px; left: 600px"><a href="http://www.any-read.net/view/3938.html">Start Reading</a></p>

<font style="position: absolute;top: 550px; left: 100px">
<img src="funny.png" height="250" width="250">

</font>
<h1 style="position: absolute;top: 550px;
    left: 400px;"><strong>Funny Girl
</strong></h1>
<h2 style="position: absolute;
    top: 600px;
    left: 400px;">
By Nick Hornby </h2>
<p style="font-family: Calibri;font-size:25px;color:green;position: absolute;top: 650px; left: 400px">The novel is about Barbara Parker, Miss Blackpool of 1964, who decides to forego ideas of becoming a beauty queen. She heads for London, determined to make her mark as a television comedienne, inspired by her idol Lucille Ball. After finding a job on a cosmetics counter in a London department store, she meets a theatrical agent, Brian Debenham, who finds her an audition for a television sitcom pilot based around the domestic life of a newlywed couple. Taking the name Sophie Straw, she becomes a star. </p>
<p style="font-family:Calibri;font-size: 25px;position: absolute;top: 800px; left: 600px"><a href="http://www.freebookol.net/Funny_Girl/77.html">Start Reading</a></p>


<font style="position: absolute;top: 950px; left: 100px">
<img src="theweddingplan.jpg" height="250" width="250">

</font>
<h1 style="position: absolute;top: 950px;
    left: 400px;"><strong>The Wedding Plan
</strong></h1>
<h2 style="position: absolute;
    top: 1000px;
    left: 400px;">
By Daisy Smith </h2>
<p style="font-family: Calibri;font-size:25px;color:green;position: absolute;top: 1050px; left: 400px">An arranged marriage,yeah okay.Will Aasera go through with it? Heck to no! She is  going to cause drama up,down left, and right before she gets married. Her story  doesn't exactly have the perfect ending, but it certainly has the most intersting begining.She is not some fairytale princess waiting to be saved, and her adventure is  just begining. The wedding plan has now become the waiting plan,because Aasera will wreak havoc.</p>
<p style="font-family:Calibri;font-size: 25px;position: absolute;top: 1275px; left: 600px"><a href="https://www.widbook.com/ebook/read/the-wedding-plan">Start Reading</a></p>


<font style="position: absolute;top:1350px; left: 100px">
<img src="mysenseofhumour.jpg" height="250" width="250">

</font>
<h1 style="position: absolute;top: 1350px;
    left: 400px;"><strong>My sense of Humor comedy for everyone!!
</strong></h1>
<h2 style="position: absolute;
    top: 1400px;
    left: 400px;">
By Alexander Jack </h2>
<p style="font-family: Calibri;font-size:25px;color:green;position: absolute;top: 1450px; left: 400px">Its just  Im bored so I m gonna be talking about anything join along with me...!!!.</p>
<p style="font-family:Calibri;font-size: 25px;position: absolute;top: 1475px; left: 600px"><a href="https://www.widbook.com/ebook/read/untitled-2affcmtq1mzm1">Start Reading</a></p>

</body>
</html>