

<!-- <?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "nursery_db";

// Create connection
// $conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

?> -->
<?php

$conn = mysqli_connect('localhost','root','','nursery_db') or die('connection failed');

?>