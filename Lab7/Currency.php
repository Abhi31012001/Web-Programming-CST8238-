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



   <form method="post">


Convert:   

   <input type="text" name="srcamt" 
	 id = "srcamt" />
	 
<input list="basecurr" name="basecurr"/>
<datalist id="basecurr">
<option value="Canadian Dollar">Canadian Dollar</option>
<option  value="New Zealand Dollar">New Zealand Dollar</option>
<option value="US Dollar">US Dollar</option>

</datalist>
    to
    <input list="dastcurr" name="dastcurr"/>
<datalist id="dastcurr">
<option value="Canadian Dollar">Canadian Dollar</option>
<option  value="New Zealand Dollar">New Zealand Dollar</option>
<option value="US Dollar">US Dollar</option>

</datalist>
   
    <input type="submit" id="sumit" name = "submit" value = "Submit" />
    
<?php
if(isset($_POST['submit']))
{
    $curr = array("CAD" =>"Canadian Dollar", "NZD" => "New Zealand Dollar",
        "USD" => "US Dollar");
    $a=$_POST['srcamt'];
    $bc=$_POST['basecurr'];
    $c=$_POST['dastcurr'];
  //  $b=$_POST['upper'];

$rates = array( "Canadian Dollar" => 0.97645,
    "New Zealand Dollar" => 1.20642,
    "US Dollar" => 1.0 );
$converted_output = ($a/$rates[$bc]) * $rates[$c];

echo "<h1>Conversion Results</h1>";
echo $a." ".$bc. " Convert to ".$converted_output." ".$c ;
}


   

?></form> 
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
