
<html>
	<head>
		<title>Form example</title>
	</head>
	<body>
	<table border = 1px ><tr>	
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
<?php

echo "<h1>Employee Importation </h1><br>";

    echo "<br><h3>The Employee name you entered: </h3> ".$_POST["firstNameTextBox"];

    echo "<br><h3>The Employee ID you entered:</h3> ".$_POST["firstNameTextBox2"];

    echo "<br><h3>The Telephone number you entered: </h3>".$_POST["firstNameTextBox3"];


    echo "<br><h3>The Email Address you entered: </h3>".$_POST["firstNameTextBox4"];

    echo "<br><h3>The Position you selected: </h3>".$_POST["position"];


    foreach($_POST["project"] as $su){
        echo "<br><h3>The Project you selected:</h3> ".$su;

}

?>
</tr></table>
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