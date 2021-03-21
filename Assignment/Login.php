<?php
echo '<div style="border: 2px solid #000000;">';
//$title ='Welcome';
echo nl2br("\n");
include "Header.php";
echo nl2br("\n");
echo '</div>';
?>
<?php
echo '<div style="border: 2px solid #000000;">';
echo nl2br("\n");
include "Menu.php";
echo nl2br("\n");
echo '</div>';
?>
<?php


$dbConnection = mysqli_connect($host, $username, $password);

if(!$dbConnection)
die("Could not connect to the database.");

mysqli_select_db($dbConnection, $database);

$sqlQuery = "SELECT * FROM mailingList";

$result = mysqli_query($dbConnection,$sqlQuery);

$rowCount = mysqli_num_rows($result);

if($rowCount == 0)
echo "*** the is no info. of mailing address ***";
else
{
for($i=0; $i<$rowCount; ++$i)
{
$row = mysqli_fetch_row($result);

echo "<table><tr>";





echo nl2br("<th>full Name: \n".$row[1]. $row[2]."<th><br />");
echo nl2br("<th>phone Number:\n ".$row[3]."</th><br />");
echo nl2br("<th>email Address:\n ".$row[4]."</th><br />");

echo "</td></tr></table>";

echo "<br />";
}
}

mysqli_close($dbConnection);
?>
         <?php echo '</div>';
echo '<br><br>';?>
<?php
echo '<div style="border: 2px solid #000000;">';
echo nl2br("\n");
include "Footer.php";
echo nl2br("\n");
echo '</div>';
?>	


</body>
</html>