<?php

include 'Connect.php';
$query = "SELECT * FROM location";
$query2=mysqli_query($konek, $query);


$data = [];
$i = 0;

while ($row = mysqli_fetch_array($query2))
{
  $data[$i]['id' ] = $row['id'];
  $data[$i]['title'] = $row['title'];
  $data[$i]['description'] = $row['description'];
  $data[$i]['lat'] = $row['lat'];
  $data[$i]['lang'] = $row['lang'];
  $data[$i]['type'] = $row['type'];
  $data[$i]['status'] = $row['status'];
  $data[$i]['user_id'] = $row['user_id'];
  $data[$i]['created_at'] = $row['created_at'];
  $i++;
}

// echo json_encode($data);







 ?>
