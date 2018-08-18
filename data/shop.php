<?php

header('Content-Type:application/json;charset=UTF-8');

require('init.php');

$sql="SELECT * FROM oppo_product";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($row);
