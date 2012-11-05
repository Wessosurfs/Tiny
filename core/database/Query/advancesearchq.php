<?php 
require("TinyBiz/core/Database/connect.php");
$name = $_POST['name'];
$region = $_POST['region'];
$town = $_POST['town'];
$zipcode = $_POST['zipcode'];
$owner = $_POST['owner'];
$submit = $_POST['Submit'];
 ?>
  
<?php
if ($name == " "){
  echo 'Empty' ;
} 

if ($submit){

  $query = mysql_query("SELECT * FROM Business  WHERE Business_Name LIKE '%$name%' ");
  $numrows = mysql_num_rows($query);
  
  if ($numrows >0){ 
    while ($rows = mysql_fetch_assoc($query)) {

      $id=$rows['Business_ID'];
      $category=$rows['Category'];
      $name=$rows['Business_Name'];
      $number=$rows['Phone_Num'];
      $address=$rows['Address'];
      $owner=$rows['Owner_Name'];
      $picture=$rows['Profile_Pic_URL'];
      $region=$rows['Region'];
      $town=$rows['Town'];
      $zipcode=$rows['Zipcode'];

      echo '<img  style = "width:200px" class = "img-polaroid" src =' .$picture . '>'  . '<br />'.
         '<b>Nombre: </b>'. $name . '<br />' . '<b>Dueño: </b>' . $owner .'<br />' .
         '<b>Telefono: </b>' . $number . '<br />' . '<b>Dirección: </b>'  . $address .  '<br />' . '<b>Categoría: </b>' . 
          $category . '<br />' . '</div>'; 
    }
  }

  else{
    echo "<h2>We are very sorry, your data could not be matched to any of our files.</h2>";
  }
}


?>