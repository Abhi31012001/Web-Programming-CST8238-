<html>
<head>
<title> </title>
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
<table border = 1px ><tr><td width="725">

 <form method="post">
  
   <h1>Employee imformation</h1>
1. Enter your Name:   


   <input type="text" name="srcamt" 
	 id = "srcamt" /><br>
<br>2. Enter your Id number:  
	<input type="text" name="srcamt2" 
	 id = "srcamt2" /><br>
<br>3. Enter your Telephone Number: 
  	<input type="text" name="srcamt3" 
	 id = "srcamt3" /><br>
<br>4. Enter your Email Address: 
  	<input type="text" name="srcamt4" 
	 id = "srcamt4" /><br>
<br>5. Please select your position: <br>
	 <input type="radio" id="Manager" name="position" value= "Manager" >
	 <label for="Manager">Manager</label><br>
	 <input type="radio" id="Team Lead" name="position" value= "Team Lead" >
	 <label for="Team Lead">Team Lead</label><br>
	 <input type="radio" id="IT Developer" name="position" value= "IT Developer" >
	 <label for="IT Developer">IT Developer</label><br>
	 <input type="radio" id=" IT Analyst" name="position" value= "IT Analyst" >
	 <label for="IT Analyst">IT Analyst</label><br>
<br>
<label for="project">6. lease select your IT projects  </label>	 
	<select name="project[]" id="project" multiple>
	<option value="Project A">Project A</option>
<option  value="Project B">Project B</option>
<option value="Project C">Project C</option>
<option value="Project D">Project D</option>
	</select>  
	   
    <input type="Submit" id="Submit" name = "Submit" value = "Submit" />
    </form> 
    </td>
    <td width="725">
<?php
if(isset($_POST['Submit']))
{
  
    $a=$_POST['srcamt'];
    $b=$_POST['srcamt2'];
    $c=$_POST['srcamt3'];
    $d=$_POST['srcamt4'];
    $d=$_POST['srcamt4'];
    $e=$_POST['position'];
    
    echo "<h1>Employee Importation </h1><br>";
    echo "<br>The employee name you entered: $a <br>";
    echo "<br>The employee ID you entered: $b <br>";
    echo "<br>The telephone number you entered: $c <br>";
    echo "<br>The email address you entered: $d <br>";
    echo "<br>The position you selected: $e <br>";

    foreach($_POST['project'] as $su){
        print "your project:  $su<br>";
    }



}

echo '</div>';
   

?>

</td></tr></table>

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
