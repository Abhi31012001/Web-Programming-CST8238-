<?php


require "MySQLConnectionInfo.php";

?>

<html>
	<head>
		<title>ViewAllEmployees.php</title>
	</head>
	<body>
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
echo '<br><br>';
echo '<div style ="text-align:center;">';
?>
<?php echo '<div style ="text-align:center;">';?>
	
	
	
		<?php 
			

			$dbConnection = mysqli_connect($host, $username, $password);
			
			if(!$dbConnection)
				die("Could not connect to the database. Remember this will only run on the Playdoh server.");
			
			mysqli_select_db($dbConnection, $database);
			
			$sqlQuery = "SELECT * FROM employee";		
				
			$result = mysqli_query($dbConnection,$sqlQuery);
			
			$rowCount = mysqli_num_rows($result);
			
			if($rowCount == 0)
				echo "*** There are no rows to display from the Employee table ***";
			else
			{
				for($i=0; $i<$rowCount; ++$i)
				{
					$row = mysqli_fetch_row($result);
										
					echo "<table><tr>";										
					
					
					
					
					echo "<td>";					
					echo "First Name: ".$row[1]."<br />";
					echo "Last Name: ".$row[2]."<br />";	
					echo "Telephone Number: ".$row[3]."<br />";
					echo "Social Insurance Number: ".$row[4]."<br />";
					echo "Password: ".$row[5]."<br />";
					echo "Email Address: ".$row[6]."<br />";
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