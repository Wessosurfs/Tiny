<?php 
	require('Tinybiz/core/Database/connect.php');
	$search =$_POST['Search'];
?>

<?php
  $K = $_POST['Search'];
  $terms = explode(" ", $K);
	$query = "SELECT * FROM Business WHERE ";
  $i =0;

  foreach ($terms as $each){
    $i++;

    if ($i == 1){
      $query .= "Business_Name LIKE '%$each%' ";
    }

    else { 
     $query .= "OR Business_Name LIKE '%$each%' ";
    }
  }
?>