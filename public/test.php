<?php
$servername = "localhost";
$username = "root";
$pass  = "";

$conn =new mysqli_connect($servername, $username, $pass);

if ($conn->conect_error){


    die("failed": ".mysqli_connect_error()");
}
echo "successfully"


?>
