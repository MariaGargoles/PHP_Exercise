<?php

require 'BladeOne.php';

use eftec\bladeone\BladeOne;


$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);


$mysqli = new mysqli("localhost", "root", "Segwanda12", "miranda");
if ($mysqli->connect_errno) {
    echo "Error al conectar con MySQL: " . $mysqli->connect_error;
    exit();
}


$sql = "SELECT * FROM rooms";
$rooms = $mysqli->query($sql);

if (!$rooms) {
    echo "Error en la consulta: " . $mysqli->error;
    exit();
}


$roomsArray = [];
while ($row = $rooms->fetch_assoc()) {
    $roomsArray[] = $row;
}
$mysqli->close();


echo $blade->run("rooms", ["rooms" => $roomsArray]);
