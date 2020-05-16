<?php
/**
 * Created by PhpStorm.
 * User: Krishna
 * Date: 5/16/2020
 * Time: 10:49 PM
 */

include_once 'db.php';

$origin = $_POST['origin'];
$destination = $_POST['destination'];
$planType = $_POST['planType'];
$cabinClass = $_POST['cabinClass'];
$miles = $_POST['miles'];

$query = $conn->query("SELECT * FROM malaysia_data WHERE destination = '$destination' AND origin = '$origin' AND planType ='$planType' AND cabinClass ='$cabinClass'AND miles ='$miles'");
$num = $query->num_rows;
if($num == 0) {
    $sql = "INSERT INTO malaysia_data (origin, destination, planType, miles, cabinClass, created_on) VALUES ('$origin', '$destination', '$planType', $miles,'$cabinClass'," . time() . ")";
    $conn->query($sql);
}
header('location:malaysia-view.php');exit();