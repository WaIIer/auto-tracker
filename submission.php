<?php
$engine_load = $_GET['E'];
$rpm = $_GET['R'];
$speed = $_GET['S'];
$throttle = $_GET['T'];
$time = $_GET['RT'];
$temp = $_GET['D'];

$file_content = $engine_load ."," .$rpm ."," .$speed .","
             .$throttle ."," .$time ."," .$temp ."\n";

$fileStatus = file_put_contents('test_trip.txt', $file_content, FILE_APPEND);
?>
