<html>
	<head>
	<title>
	 Range of Prime Numbers in PHP
	 </title>
 </head>
	<style>
	body {
	 font-family:arial;
	 font-size :20px;
	
}
input[type=Generate]
	{
font-size: 30px; 
font-weight: bold;
font-family: arial; 
color: black;
	}
	</style>
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
 error_reporting(0);
 $a=$_POST['lower'];
 $b=$_POST['upper'];	
{
$a="";
$b="";
}	

 ?>		
			<br>
<div style ="text-align:center;width:100%">

<h3>Range in Prime Numbers</h3>
<form method="post" action="prime.php" name="prime_me">
Range 1:   <input type="text" name="lower" 
	 size="5" value="<?php echo $a; ?>" autofocus>
     	 	 
Range 2:   <input type="text" name="upper" 
	 size="5" value="<?php echo $b; ?>">

<input type="submit" name="check" value="Generate">
<br><br>     	 	 	

</form>
	</div>
<?php
if(isset($_POST['check']))
{
$a=$_POST['lower'];
$b=$_POST['upper'];
$flag=0;
for($a;$a<$b;$a++)
{
for($j=2;$j<$a;$j++)
{
if($a%$j==0)
{
$flag=1;
}
}
if($flag==0)
{
    echo '<div style ="text-align:center;">';
echo $a."is a prime number";
echo nl2br("\n");
echo '</div>';
}
$flag=0;
}
}
?>

<?php
echo '<div style="border: 2px solid #000000;">';
echo nl2br("\n");
include "Footer.php";
echo nl2br("\n");
echo '</div>';
?>
</body>
</html>