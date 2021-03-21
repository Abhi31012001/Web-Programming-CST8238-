<html>
<head>
<title> echo $index</title>
</head>
<body>
$index = 'Index';
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
echo '<div style="border: 2px solid #000000;text-align:center;">';
$txt1='Abhi ';
$txt2='GirishBhai';
$txt3='Patel';
$a='Hello World!!  ';
$a1='This is my first PHP Web Page!!';
define("StudentNumber","My Student Id is 040978822");
echo nl2br("\n");
echo nl2br("Welcome to my First PHP lab\n");
echo nl2br("\n");
echo nl2br("My Name is $txt1 $txt2 $txt3.\n");
echo nl2br("\n");

echo StudentNumber;
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("$a $a1");
echo nl2br("\n");



echo '</div>';
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
