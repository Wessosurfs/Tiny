<?php

$session_error = "Sorry the server is currently down";
mysql_connect('localhost', 'root', '') or die($session_error);
mysql_select_db('TinyBiz');

?>