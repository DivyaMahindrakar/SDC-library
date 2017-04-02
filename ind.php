<html>
<head>
<script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.js"></script>
</head>
<body background="good.jpg">
<link rel="stylesheet" type= "text/css" href="second.css">
<script language="javascript" type="text/javascript">
 $(document).ready(function()
{
$('.linklist').click(function(){
var linkid=$(this).attr('id');
$.post("increment.php", { id: linkid } );
});
});
</script>
<h1 style="font-family:Castellar;font-size:'50px'"><center>BOOKS TO DOWNLOAD</center></h1>
<h3 style="font-family:Lucida Handwriting; position:absolute ;left:900px;top:35px">YOU ARE NOW LOGGED IN<a href="logout.php"> (LOGOUT)</a></h3>

<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 120px; left: 100px">Grashalmen</p>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 120px; left: 500px">Walt Whitman</p>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 120px; left: 900px"><a href="1.pdf" class="linklist" id="1">Download..</a></p>

<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 150px; left: 100px">Drum Taps </p>
<p style="font-family:Lucida Handwriting;font-size:20px;position: absolute;top: 150px; left: 500px">by Walt Whitman</p>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 150px; left: 900px"><a href="2.pdf" class="linklist" id="2">Download...</a></p>

<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 175px; left: 100px">The Little warrior </p>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 175px; left: 500px">by P.G. Wodehouse</p>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 175px; left: 900px"><a href="3.pdf" class="linklist" id="3">Download...</a></p>

<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 200px; left: 100px">The girl on Boat </P>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 200px; left: 500px">by P.G. Wodehouse</P>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 200px; left: 900px"><a href="4.pdf" class="linklist" id="4">Download...</a></p>

<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 230px; left: 100px">The Little Nugget- </p>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 230px; left: 500px">by p.g. Wodehouse</p>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 230px; left: 900px"><a href="5.pdf" class="linklist" id="5">Download...</a></p>

<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 260px; left: 100px">Dear Brutus </p>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 260px; left: 500px">by J.M.Barrie</p>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 260px; left: 900px"><a href="6.pdf" class="linklist" id="6">Download...</a></p>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 290px; left: 100px">A Garland for Girls- </p>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 290px; left: 500px">by Louisa Alcott</p>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 290px; left: 900px"><a href="7.pdf" class="linklist" id="7">Download...</a></p>

<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 320px; left: 100px">I cant speak English- </p>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 320px; left: 500px">by Jason West</p>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 320px; left: 900px"><a href="8.pdf" class="linklist" id="8">Download...</a></p>

<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 350px; left: 100px">Alice Sit by the fire! </p>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 350px; left: 500px">by J.M. Barrie</p>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 350px; left: 900px"><a href="9.pdf" class="linklist" id="9">Download...</a></p>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 380px; left: 100px">Something New- </p>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 380px; left: 500px">by p.g. Wodehouse</p>
<p style="font-family:Lucida Handwriting;font-size: 20px;position: absolute;top: 380px; left: 900px"><a href="10.pdf" class="linklist" id="10">Download...</a></p>





</body>
</html>