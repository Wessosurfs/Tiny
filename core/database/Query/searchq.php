<?php 
 
  include 'TinyBiz/core/functions/search.php'; 
  
  $query = mysql_query($query);
  $numrows = mysql_num_rows($query);

  if ($numrows > 0){
    while($rows = mysql_fetch_assoc($query)){
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
          $category . '<hr>' . '<br />';
    }
  }

  else {
    echo '<p>There are no results for</p>' . $K;
  }
?>