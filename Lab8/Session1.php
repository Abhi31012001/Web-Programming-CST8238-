

<html>
	<head>
		<title>Form example</title>
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
		<form method="post" action="Session2.php">
		<?php 
		echo '<br><br>';
		?>
		<h1>Please Enter Information of Employee</h1>
		<table border = 1px ><tr>
		<h3>	1. Enter your Name: ? </h3>
			<input type="text" name="firstNameTextBox" value="" />
		<br><h3>2. Enter your Id number:</h3>  
		<input type="text" name="firstNameTextBox2" value="" />
		<br><h3>3. Enter your Telephone Number: </h3>
		<input type="text" name="firstNameTextBox3" value="" />
		<br><h3>4. Enter your Email Address: </h3>
		<input type="text" name="firstNameTextBox4" value="" />
		<br><h3>5. Please select your position:</h3> <br>
			 <input type="radio" name="position"
<?php if (isset($position) && $position=="Manager") echo "checked";?>
value="Manager">Manager
<input type="radio" name="position"
<?php if (isset($position) && $position=="IT Analyst") echo "checked";?>
value="IT Analyst">IT Analyst
<input type="radio" name="position"
<?php if (isset($position) && $position=="IT Developer") echo "checked";?>
value="IT Developer">IT Developer
<input type="radio" name="position"
<?php if (isset($position) && $position=="Team Lead") echo "checked";?>
value="Team Lead">Team Lead

<br><h3>
<label for="project">6. lease select your IT projects  </label>	</h3> 
	<select name="project[]" id="project" multiple>
	<option value="Project A">Project A</option>
<option  value="Project B">Project B</option>
<option value="Project C">Project C</option>
<option value="Project D">Project D</option>
	</select>  
	
			<input type="submit" />
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
</form>
	</body>
</html>
