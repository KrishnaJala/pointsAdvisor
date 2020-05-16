<?php
/**
 * Created by PhpStorm.
 * User: Krishna
 * Date: 5/16/2020
 * Time: 10:36 PM
 */

include_once 'db.php';

$id = $_POST['id'];

$query = "SELECT * FROM malaysia_data WHERE id='$id'";
$query = $conn->query($query);
$num = $query->num_rows;
if ($num > 0) {
    return $conn->query("DELETE FROM malaysia_data WHERE id='$id'");
}
