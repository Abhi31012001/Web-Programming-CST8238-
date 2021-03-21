






<?php


require "MySQLConnectionInfo.php";

$error = "";

if(!isset($_POST["firstName"]) || !isset($_POST["lastName"]) || !isset($_POST["telephoneNumber"]) || !isset($_POST["socialInsuranceNumber"]) || !isset($_POST["password"]) || !isset($_POST["emailAddress"])                                                                               )
{
    $error = "Please enter a first name, last name,telephone number,social insurance number,password,email address";
}
else
{
    if($_POST["firstName"] != "" && $_POST["lastName"] != "" && $_POST["telephoneNumber"] != "" && $_POST["socialInsuranceNumber"] != "" && $_POST["password"] != "" && $_POST["emailAddress"] != "")
    {
        $dbConnection = mysqli_connect($host, $username, $password);
        
        // Check connection
        if ($dbConnection->connect_error) {
            die("Connection failed: " . $dbConnection->connect_error);
        }
        echo "Connected successfully" . "<br>";
        
        mysqli_select_db($dbConnection, $database);
        
        $sqlQuery = "INSERT INTO employee (FirstName, LastName, TelephoneNumber, SocialInsuranceNumber, Password, EmailAddress) VALUES('".$_POST["firstName"]."', '".$_POST["lastName"]."', '".$_POST["telephoneNumber"]."', '".$_POST["socialInsuranceNumber"]."', '".$_POST["password"]."', '".$_POST["emailAddress"]."')";
        
        if (mysqli_query($dbConnection, $sqlQuery)) {
            echo "Employee Successfully Added". "<br>";
        } else {
            echo "Employee Could not be added: " . $sql . "<br>" . mysqli_error($dbConnection);
        }
        
        mysqli_close($dbConnection);
    }
    else
        $error = "Please enter a first name,last name,telephone number,social insurance number,password,email address.";
}

?>

<html>
	<head>
		<title>MySQL Insert</title>
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
			
				
		<form action="CreateAccount.php" method="post">
			First Name: <input type="text" name="firstName" />
			<br />
			Last Name: <input type="text" name="lastName" />
			<br />
			Telephone Number: <input type="number" name="telephoneNumber" />
			<br />
			Social Insurance Number: <input type="number" name="socialInsuranceNumber" />
			<br />
			Password: <input type="text" name="password" />
			<br />
			Email Address: <input type="text" name="emailAddress" />
			<br />
			<br />
			<input type="submit" value="Submit to Database" />
		</form>
		<br />
		<br />
		<?php 
			echo $error;
		?>		
<?php echo '</div>';
echo '<br><br>';?>
<?php
echo '<div style="border: 2px solid #000000;">';
echo nl2br("\n");
include "Footer.php";
echo nl2br("\n");
echo '</div>';
?>?>
	
	
	</body>
</html>



