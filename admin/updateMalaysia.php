<?php
/**
 * Created by PhpStorm.
 * User: Krishna
 * Date: 5/16/2020
 * Time: 9:48 PM
 */

include_once 'db.php';

$id = $_POST['id'];
$origin = $_POST['origin'];
$destination = $_POST['destination'];
$planType = $_POST['planType'];
$cabinClass = $_POST['cabinClass'];
$miles = $_POST['miles'];

$query = "SELECT * FROM malaysia_data WHERE id='$id'";
$query = $conn->query($query);
$num = $query->num_rows;
if ($num > 0) {
    $conn->query("UPDATE malaysia_data SET miles='$miles',destination='$destination',origin='$origin',updated_on=".time().",planType ='$planType', cabinClass ='$cabinClass' WHERE id='$id'");
}
header('location:malaysia-view.php');exit();
?>