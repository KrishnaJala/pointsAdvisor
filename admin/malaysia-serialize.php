<?php
/**
 * Created by PhpStorm.
 * User: Krishna
 * Date: 5/15/2020
 * Time: 10:26 AM
 */

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "malaysiaairlines";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = $conn->query("SELECT * FROM malaysia_data");
$num = $query->num_rows;
if ($num == 0) {
    $data = array();
} else {
    $data = $query->fetch_all(MYSQLI_ASSOC);
}

foreach ($data as $eachData) {
    $origin = $eachData["origin"];
    $destination = $eachData["destination"];
    $airline = 'malaysiaairlines';
    $programme_slug = 'malaysiaairlines';
    $data = serialize(array('trip_type' => $eachData['planType'], 'class' => $eachData['cabinClass'], 'points' => $eachData['miles'], 'level' => 'NA'));

    $query = "SELECT * FROM routes WHERE origin='$origin' AND destination='$destination' AND airline_slug='$airline'";
    $query = $conn->query($query);
    $num = $query->num_rows;
    if ($num == 0) {
        $conn->query("INSERT INTO routes (origin,destination,programme_slug,airline_slug,data,created_at) VALUES ('$origin','$destination','$programme_slug','$airline','$data',NOW())");
    } else {
        $conn->query("UPDATE routes SET data='$data',updated_at=NOW() WHERE origin='$origin' AND destination='$destination' AND programme_slug='$programme_slug' AND airline_slug='$airline'");
    }
}

?>