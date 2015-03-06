<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

mysql_connect($host, $user, $pass);
mysql_select_db($db);


if(isset($_POST['username'])){
	$username = md5($_POST['username']);
	$password = md5($_POST['password']);
	$sql = "SELECT * FROM user WHERE email='".$username."' AND password='".$password."' LIMIT 1";
	$res = mysql_query($sql);

	if(mysql_num_rows($res) == 1){
		echo "Login Success";
		exit();
	}
	else{
		echo "Login Fail";
		exit();
	}
}


?>