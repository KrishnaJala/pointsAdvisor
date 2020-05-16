<?php
/**
 * Created by PhpStorm.
 * User: Krishna
 * Date: 5/16/2020
 * Time: 10:36 PM
 */

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "malaysiaairlines";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
