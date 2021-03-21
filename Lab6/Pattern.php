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

function print_square($n) 
{ 
	$i; 
	$j; 
	
	for ($i = 1; $i <= $n; $i++) 
	{ 
    echo "<p><center>";
		for ($j = 1; $j <= $n; $j++) 
		{ 
			if ($i == 1 || $i == $n || 
				$j == 1 || $j == $n)	 
			    
			    echo ("*");	
			   // echo '</div>';
			else	
			    echo "&nbsp; ";
			   // echo '</div>';
		} 
		echo nl2br("\n");
	} 
	echo "</center></p>";
} 

	
	$rows = 5; 
	 
	print_square($rows); 
	
 
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
