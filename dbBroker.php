<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'kolokvijumi';



$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_errno) {
    exit("neuspesna konekcija: " . $conn->connect_errno);
}
