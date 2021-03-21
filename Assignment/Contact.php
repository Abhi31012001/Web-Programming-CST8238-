<?php


echo '<div style="border: 2px solid #000000;">';
//$title ='Welcome';
echo nl2br("\n");
include "Header.php";
echo nl2br("\n");
echo '</div>';

echo '<div style="border: 2px solid #000000;">';
echo nl2br("\n");
include "Menu.php";
echo nl2br("\n");
echo '</div>';

require "MySQLConnectionInfo.php";

$error = "";

if(!isset($_POST["firstName"]) || !isset($_POST["lastName"]) || !isset($_POST["phoneNumber"]) || !isset($_POST["emailAddress"]) || !isset($_POST["username"]) || !isset($_POST["referrer"]))
{
    $error = "Please enter a first name, last name,phone number,email address,username,referrer";
}
else
{
    if($_POST["firstName"] != "" && $_POST["lastName"] != "" && $_POST["phoneNumber"] != "" && $_POST["emailAddress"] != "" && $_POST["username"] != "" && $_POST["referrer"] != ""  )
    
    
    
    {
        $dbConnection = mysqli_connect($host, $username, $password);
        
        // Check connection
        if ($dbConnection->connect_error) {
            die("Connection failed: " . $dbConnection->connect_error);
        }
        echo "Connected successfully" . "<br>";
        
        mysqli_select_db($dbConnection, $database);
        $emailAddress = '';
        
        function createuser($emailAddress){
            
            
            $sqlquery= "select * from mailingList where emailAddress = '$emailAddress'";
            $result = mysql_result(mysqli_query($sqlquery),0);
            if($result > 0){
                
                die("there is already a user with that email!");
                
            }
        }
        
        
        {
            $sqlQuery = "INSERT INTO  mailingList (FirstName, LastName, phoneNumber, emailaddress, username,referrer) VALUES('".$_POST["firstName"]."', '".$_POST["lastName"]."', '".$_POST["phoneNumber"]."',  '".$_POST["emailAddress"]."',  '".$_POST["username"]."',  '".$_POST["referrer"]."')";
            
            if (mysqli_query($dbConnection, $sqlQuery)) {
                echo "Data Successfully Added". "<br>";
            } else {
                echo "Data Could not be added: " . $sqlQuery . "<br>" . mysqli_error($dbConnection);
            }
        }
        mysqli_close($dbConnection);
    }
    //elseif
    //    $error = "Please enter a first name,last name,phone number,email address,username,referral.";
}

?>
<html>
<head>
<title>contact</title>
</head>
<body>
<?php
// define variables and set to empty values
$firstNameErr = $lastNameErr = $phoneNumberErr = $emailAddressErr = $usernameErr = $referrerErr= "";
$firstName = $lastName = $phoneNumber = $emailAddress = $username = $referrer = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstName"])) {
    $firstNameErr = "firstName is required";
  } else {
    $firstName = test_input($_POST["firstName"]);
  }
 
  if (empty($_POST["lastName"])) {
    $lastNameErr = "lastName is required";
  } else {
    $lastName = test_input($_POST["lastName"]);
  }
   
  if (empty($_POST["phoneNumber"])) {
    $phoneNumberErr = "phoneNumber is required";
  } else {
    $phoneNumber = test_input($_POST["phoneNumber"]);
  }

  if (empty($_POST["emailAddress"])) {
    $emailAddressErr = "email address is required";
  } else {
    $emailAddress = test_input($_POST["emailAddress"]);
  }

  if (empty($_POST["username"])) {
    $usernameErr = "username is required";
  } else {
    $username = test_input($_POST["username"]);
  }
  if (empty($_POST["referrer"])) {
      $referrerErr = "referrer is required";
  } else {
      $referrer = test_input($_POST["referrer"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

                <div class="main">
                    <h1>Sign up for our newsletter</h1>
                    <p>Please fill out the following form to be kept up to date with news, specials, and promotions from the WP eatery!</p>
                    <p><span class="error">* required field</span></p>
                    <form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  >
                        <table>
                            <tr>
                                <td>First Name:</td>
                                <td><input type="text" name="firstName" id="firstName" size='40'><span class="error">* <?php echo $firstNameErr;?></span></td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><input type="text" name="lastName" id="lastName" size='40'><span class="error">* <?php echo $lastNameErr;?></span></td>
                            </tr>
                            <tr>
                                <td>Phone Number:</td>
                                <td><input type="text" name="phoneNumber" id="phoneNumber" size='40'><span class="error">* <?php echo $phoneNumberErr;?></span></td>
                            </tr>
                            <tr>
                                <td>Email Address:</td>
                                <td><input type="text" name="emailAddress" id="emailAddress" size='40'><span class="error">* <?php echo $emailAddressErr;?></span></td>
                            </tr>
                             <tr>
                                <td>Username:</td>
                                <td><input type="text" name="username" id="username" size='20'><span class="error">* <?php echo $usernameErr;?></span></td>
                            </tr>
                            <tr>
                                <td>How did you hear<br> about us?</td>
                                <td>
                                   <select name="referrer" size="1">
                                      <option>Select referer</option>
                                      <option value="newspaper">Newspaper</option>
                                      <option value="radio">Radio</option>
                                      <option value="tv">Television</option>
                                      <option value="other">Other</option>
                                   </select>
                                   <span class="error">* <?php echo $referrerErr;?></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan='2'><input type='submit' name='btnSubmit' id='btnSubmit' value='Sign up!'>&nbsp;&nbsp;<input type='reset' name="btnReset" id="btnReset" value="Reset Form"></td>
                            </tr>
                        </table>
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
