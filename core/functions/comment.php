<?php 
    require("TinyBiz/core/Database/connect.php");
	$name=$_POST['Name'];
	$comment=$_POST['Comment'];
	$submit=$_POST['Submit'];

	if($submit){
		if($name&&$comment){
			$insert=mysql_query("INSERT INTO Comments (Name,Comment) VALUES ('$name','$comment') ");
		}
		else{
			echo "please fill out all fields";
		}
	}
?>


