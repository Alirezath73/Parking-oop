<?php
require './Parking.php';

$instanceOfParking = new Parking('motorcycle', '5');

echo '<pre>';
die(var_dump($instanceOfParking));
echo '</pre>';
