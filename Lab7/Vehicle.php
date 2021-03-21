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
echo nl2br("\n");
echo nl2br("\n");
?>

<?php






echo '<div style ="text-align:center;">';

interface Vehicle
{
    public  function  displayVehicleInfo();
}
class LandVehicle implements Vehicle {
    public $make;
    public $model;
    public $year;
    public $price;
    public  function __constructor()
    {
        $this -> make = $make;
        $this -> model = $model;
        $this -> year = $year;
        $this -> price = $price;
    }
    function displayVehicleInfo()
    {
        echo '<b>Make: </b>' . $this->make . ', <b>Model: </b>' . $this->model . ', <b>Year: </b>' . $this->year . ', <b>Price: </b>' . $this->price ;
       // print 'landVehicle(make=' . $this->make ;
    }
}


class Car extends LandVehicle{
    
    public $speedlimit;
    
    public   function __constructor(){
        parent::__constructor();
        
        
        $this -> speedlimit = $speedlimit;
    }
    function displayVehicleInfo()
    {
        parent::displayVehicleInfo();
        echo ', <b>Speedlimit: </b>' . $this->speedlimit;
    }
}

class WaterVehicle implements Vehicle {
    public $make;
    public $model;
    public $year;
    public $price;
    public  function __constructor()
    {
        $this -> make = $make;
        $this -> model = $model;
        $this -> year = $year;
        $this -> price = $price;
    }
    function displayVehicleInfo()
    {
        echo '<b>Make: </b>' . $this->make . ', <b>Model: </b>' . $this->model . ', <b>Year: </b>' . $this->year . ', <b>Price: </b>' . $this->price ;
        // print 'landVehicle(make=' . $this->make ;
    }
}
class Boat extends WaterVehicle{
    
    public $speedlimit;
    
    public   function __constructor(){
        parent::__constructor();
        
        $this ->BoatCapacity  = $BoatCapacity;
    }
    function displayVehicleInfo()
    {
        parent::displayVehicleInfo();
        echo ' , <b>BoatCapacity:</b> ' . $this->BoatCapacity;
    }
}

$car1 = new Car();
$car2 = new Car();


$car1 -> make = "Toyato";
$car1-> model= "Camry";
$car1 -> year= "1992";
$car1-> price="2000";
$car1-> speedlimit="180";

$car2 -> make = "Honda";
$car2 -> model= "Accord";
$car2 -> year= "2002";
$car2 -> price="6000";
$car2 -> speedlimit="200";




$obj = new Boat();
$obj2 = new Boat();


$obj -> make = "Mitsubishi";
$obj-> model= "Turbo";
$obj -> year= "1999";
$obj-> price="20000";
$obj-> BoatCapacity="18";

$obj2 -> make = "Hyundai";
$obj2 -> model= "XT";
$obj2 -> year= "2012";
$obj2 -> price="26000";
$obj2 -> BoatCapacity="8";

echo '<h2><u>Car</u></h2>';
echo $car1->displayVehicleInfo();
echo nl2br("\n");
echo nl2br("\n");
echo $car2->displayVehicleInfo();
echo nl2br("\n");
echo nl2br("\n");
echo '<h2><u>Boat</u></h2>';
echo $obj->displayVehicleInfo();
echo nl2br("\n");
echo nl2br("\n");
echo $obj2->displayVehicleInfo();
echo nl2br("\n");
echo nl2br("\n");

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
