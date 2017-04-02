<html>
<head>
<title>
Download Books!!</title>
</head>
<body>
<?php
mysqli_connect("localhost","root","","download");
$res=mysql_query("SELECT * FROM download ");
echo "<table>";

while($row=mysql_num_rows($res))
{
echo "<tr>";
echo "<td>"; echo $row["name"];echo"</td>";
echo "<td>";?><a href="<?php echo $row["path"]; ?>"> Download </a> <?php echo "</td>";
echo "</tr>";

}
echo "</table>";
?>

</body>
</html>