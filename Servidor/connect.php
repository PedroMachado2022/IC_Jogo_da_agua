<?php
$conn = mysqli_connect("localhost", "root", "", "projetoagua2020_app");

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
} else {
    echo "Connected successfully to MySQL!" . PHP_EOL;
}
?>