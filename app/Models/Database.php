<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'contactapp';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die('Connection Failed!' . $conn->connect_error);
}
// echo 'Connection Success!';

$result = $conn->query('SELECT * FROM contacts');

$arr = array();
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        foreach ($row as $key => $value) {
            $arr[$key][] = $value;
        }
    }
}
