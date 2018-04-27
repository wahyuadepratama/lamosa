<?php

include 'Connect.php';
$query = "SELECT * FROM junk_bank";
$query2=mysqli_query($konek, $query);


$bank = [];
$i = 0;

while ($row = mysqli_fetch_array($query2))
{
  $bank[$i]['id' ] = $row['id'];
  $bank[$i]['name'] = $row['name'];
  $bank[$i]['description'] = $row['description'];
  $bank[$i]['lat'] = $row['lat'];
  $bank[$i]['lang'] = $row['lang'];
  $bank[$i]['user_id'] = $row['user_id'];
  $bank[$i]['created_at'] = $row['created_at'];
  $i++;
}

// echo json_encode($data);
?>
