<?php 
include "db_connect.php";

$sql = "SELECT * FROM post";
$data = mysqli_query($conn, $sql) or die(mysqli_error());
$result = mysqli_fetch_assoc($data);
$data = $result["post"];
echo json_encode($data);