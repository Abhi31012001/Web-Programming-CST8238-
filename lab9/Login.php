<?php

session_start();
$host = "localhost";
$username = "abhipate_cst8238";
$password = "abhi_cst8238";
$database = "abhipate_cst8238";



if(isset($_POST['btnLogin'])){
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    
    $conn = new mysqli($host, $username, $database);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "Select * from Employee where EmailAddress = '$email';";
    
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        if($row["EmailAddress"] == $email){
            
            echo "it's in";
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["pswd"] = $_POST["pass"];
            header("Location: http://zeeldiyora.com/CST8238/Lab9/ViewAllEmployees.php");
            
        }
        else{
            echo "Email or Password is incorrect.";
        }
    }else{
        echo "Email or Password is incorrect.";
    }
    $conn->close();
}

?>
<html>
	<head>
		<title> Login </title>
		<link rel="stylesheet" type="text/css" href="css/StyleSheet.css">
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
		<div id="content">
			<form action="" method="POST">
			<fieldset style="display: inline-block;">
			
				<b>Login</b><br>&nbsp;</br>
				
				<label> Email Address: </label>
				<input type="email" name="email" id="email"><br/>
				
				<label> Password: </label>
				<input type="password" name="pass" id="pass"><br/><br/>
				
				<input type="submit" name="btnLogin" id="btnLogin" value="Login">
			
			</fieldset>
			
			</form>
			
		</div>
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