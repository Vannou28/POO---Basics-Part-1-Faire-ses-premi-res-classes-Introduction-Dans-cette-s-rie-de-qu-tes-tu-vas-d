<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
<?php include_once ('Car.php');?>    
<?php include_once ('Bicycle.php');?>

<?php

$bike= new Bicycle('blue');


$bike->setCurrentSpeed(0);
var_dump($bike);
$bike->dump();

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();






$myCar = new Car('blue', 4, 'diesel');

var_dump($myCar); // then, another dump.

echo $myCar->start();
$myCar->setCurrentSpeed(30);
echo $myCar->forward();

echo '<br> Vitesse du véhicule: ' . $myCar->getCurrentSpeed(). ' km/h' . '<br>';
echo $myCar->brake();
echo '<br> Vitesse du véhicule : ' . $myCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $myCar->brake();


?>    
   
</body>
</html>