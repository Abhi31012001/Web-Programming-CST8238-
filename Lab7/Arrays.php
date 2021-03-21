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
echo '<div style ="text-align:center;">';
$nokeyarray = array( 10,  20,  30, 40);

//$key = array( "0","1","2","3",);

echo "<br><br>";
echo '<div style="color:Blue;">';
echo "No Key Array - Output using var_dump";
echo "<br><br>";
echo '</div>';
Var_dump($nokeyarray);
echo "<br><br>";
echo '<div style="color:Blue;">';
echo "No key Array - Output using foreach";
echo '</div>';
echo "<br><br>";

foreach ($nokeyarray as $key => $element  ) {
    print 'key: ' .$key. ', value: ' . $element.', key data type: '.gettype($key)."<br>";

}
$stringKeyArray = array('key1' => 'item1' , 'key2'=>'item2');



echo "<br><br>";
echo '<div style="color:Blue;">';
echo "String Key Array - Output using var_dump";
echo "<br><br>";
echo '</div>';
Var_dump($stringKeyArray);
echo "<br><br>";
echo '<div style="color:Blue;">';
echo "String Key Array - Output using foreach";
echo '</div>';
echo "<br><br>";

foreach ($stringKeyArray as $key => $element  ) {
    print 'key: ' .$key. ', value: ' . $element.', key data type: '.gettype($key)."<br>";
    
}


$intKeyArray = array(0 => 'item1' , 1 =>'item2', 3 =>'iteam2');



echo "<br><br>";
echo '<div style="color:Blue;">';

echo "Integer Key Array - Output using var_dump";
echo "<br><br>";
echo '</div>';
Var_dump($intKeyArray);
echo "<br><br>";
echo '<div style="color:Blue;">';

echo "Integer Key Array - Output using foreach";
echo '</div>';
echo "<br><br>";

foreach ($intKeyArray as $key => $element  ) {
    print 'key: ' .$key. ', value: ' . $element.', key data type: '.gettype($key)."<br>";
    
}
$mixedKeyArray = array('key1' => 'item1' , 'key2' =>'item2', 2 =>'iteam8', 4 => 'iteam4', 5 => 'iteam5', 3 => 'iteam6', 1 => 'iteam7');



echo "<br><br>";
echo '<div style="color:Blue;">';

echo "Mixed Key Array - Output using var_dump";
echo "<br><br>";
echo '</div>';
Var_dump($mixedKeyArray);
echo "<br><br>";
echo '<div style="color:Blue;">';

echo "Mixed Key Array - Output using foreach";

echo "<br><br>";
echo '</div>';
foreach ($mixedKeyArray as $key => $element  ) {
    print 'key: ' .$key. ', value: ' . $element.', key data type: '.gettype($key)."<br>";
    
}



$multi1 = Array("10","20");
$multi2 = Array("30","40");
$multiDimensionArray = Array($multi1,$multi2);
echo "<br><br>";
echo '<div style="color:Blue;">';

echo "Multi-dimensional Array - Output using var_dump";
echo "<br><br>";
echo '</div>';
var_dump($multiDimensionArray);
echo "<br><br>";
echo '<div style="color:Blue;">';

echo "Mixed Key Array - Output using foreach";
echo '</div>';
echo "<br><br>";
foreach($multiDimensionArray as $key1 => $element1){
    echo 'Level 1 key: '.$key1;
    echo nl2br("\n");
    foreach($element1 as $key => $element){
     //   echo 'Level 2 key: '.$key2.',value:'.$element2. ',key data type: ' .gettype($key2).'<br>';
      //  echo'<br>';
        print 'key: ' .$key. ', value: ' . $element.', key data type: '.gettype($key)."<br>";
    }
}
echo '</div>';
?>


<?php
echo nl2br("\n");
echo nl2br("\n");
echo '<div style="border: 2px solid #000000;">';
echo nl2br("\n");
include "Footer.php";
echo nl2br("\n");
echo '</div>';
?>
</body>
</html>