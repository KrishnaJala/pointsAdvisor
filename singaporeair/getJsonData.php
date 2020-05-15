<?php
/**
 * Created by PhpStorm.
 * User: Krishna
 * Date: 5/8/2020
 * Time: 8:24 PM
 */

/*Post request*/

/*$url = 'http://www.mysite.com/api';
$ch = curl_init($url);
$data = ['name'=>'Hardik', 'email'=>'itsolutionstuff@gmail.com'];
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type:application/json',
    'App-Key: 123456',
    'App-Secret: 1233'
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);*/

$ori = $_GET['ori'];
$des = $_GET['des'];

$ch = curl_init();
$url = "https://www.singaporeair.com/accrualMiles.form?origin=$ori&destination=$des";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//Execute request
curl_exec($ch);

//get the default response headers
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

//close connection
curl_close($ch);
?>