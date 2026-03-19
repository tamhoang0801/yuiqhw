<?php
header("Content-Type: application/json");
include "connect.php";

$sql = "SELECT * FROM test";
$result = mysqli_query($connect,$sql);

$data = [];

while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

echo json_encode($data);
?>