<?php
	$getquery=mysql_query("SELECT * FROM Comments ORDER BY id DESC");
	while($rows=mysql_fetch_assoc($getquery))
	{
		$id=$rows['id'];
		$name=$rows['Name'];
		$comment=$rows['Comment'];
		echo $name . '<br/>' . '<br/>' . $comment . '<br/>' . '<br/>' . '<hr size="1"/>';
	}
?>