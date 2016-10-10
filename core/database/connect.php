<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

// mysql_connect('localhost','root','123');
// mysql_select_db('shoppcart');
$connection = mysqli_connect('localhost','root','123','shoppcart');

?>
