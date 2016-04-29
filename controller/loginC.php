<?php
$name = addslashes($_POST['name']);
$password = addslashes($_POST['password']);
if($name == "" || $password == ""){
	echo "login failed";
	die();
}
mysql_connect("localhost","root","care4yourself");
mysql_select_db("wblog");
$query = "select * from user where `name` = '{$name}' and `password` = '{$password}' ";
$result = mysql_query($query);
if(mysql_num_rows($result)){
	echo "login ok";
} else {
	echo "login failed";
}

