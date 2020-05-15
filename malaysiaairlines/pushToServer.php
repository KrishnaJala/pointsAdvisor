<?php
/**
 * Created by PhpStorm.
 * User: Krishna
 * Date: 5/12/2020
 * Time: 11:29 PM
 */

$dataArray = $_POST['dataArray'];
$des = $_POST['des'];

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "malaysiaairlines";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$json = ($dataArray);
foreach ($json as $key => $val) {
    //into milesList
    foreach ($val as $key1 => $val1) {
        //into plans outer array
        foreach ($val1 as $key2 => $val2) {
            //into plans array here
            //platinum, gold, silver, blue ==> $key2 ==== planType
            foreach ($val2 as $key3 => $val3) {
                //into each plan data array values  ==> $val3['objectName'] (miles, cabinClass)
                $miles = $val3['miles'];
                $cabinClass = $val3['cabinClass'];

                $query = $conn->query("SELECT * FROM pointsData WHERE destination = '$des' AND planType ='$key2' AND cabinClass ='$cabinClass'");
                $num = $query->num_rows;
                if($num == 0) {
                    $sql = "INSERT INTO pointsData (origin, destination, planType, miles, cabinClass, created_on)
VALUES ('KUL', '$des', '$key2', $miles,'$cabinClass'," . time() . ")";

                    if ($conn->query($sql) === TRUE) {
                        $result = true;
                    } else {
                        $result = false;
                        return false;
                    }
                }else{
                    $sql = "UPDATE pointsData SET miles=$miles, updated_on=".time()." WHERE destination='$des' AND planType ='$key2' AND cabinClass ='$cabinClass'";
                    if ($conn->query($sql) === TRUE) {
                        $result = true;
                    } else {
                        $result = false;
                        return false;
                    }
                }
            }
        }
    }
}

$conn->close();
echo $result;