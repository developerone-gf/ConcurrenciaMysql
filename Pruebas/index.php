<?php
$servername = "ec2-52-23-208-212.compute-1.amazonaws.com";
$database = "prueba";
$username = "root";
$password = "clavemuydificil";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT * FROM tabla ORDER BY name';
$query = $conn->query($sql);
$array = [];
foreach ($query as $row) {
    foreach ($row as $key => $value) {
        print $value.' ';
    }
    print '\n';
}

echo "Connected successfully";
mysqli_close($conn);
?>