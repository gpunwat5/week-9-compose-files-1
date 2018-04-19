<?php
$link = mysql_connect('db', 'user', 'password');
if (!$link) {
die('Not connected: ' . mysql_error());
}
#echo 'Connected with mysql_connect<br />';
mysql_close($link);
$mysqli = new mysqli('db', 'user', 'password', 'db_test');
 
if ($mysqli->connect_error) {
die('Connect Error (' . $mysqli->connect_errno . ') '
. $mysqli->connect_error);
}
 
if (mysqli_connect_error()) {
die('Connect Error (' . mysqli_connect_errno() . ') '
. mysqli_connect_error());
}
#echo 'Success with mysqli connection at … ' . $mysqli->host_info . "\n";

$query = mysqli_query($mysqli,"CREATE TABLE newn (hello VARCHAR(30) NOT NULL)")
;

$query = mysqli_query($mysqli,"INSERT INTO newn (hello) VALUES ('hello from db container')");

$query = mysqli_query($mysqli,"SELECT * FROM newn")
	or die(mysqli_fetch_error($query));
while ($row = mysqli_fetch_array($query)) {
	echo $row['hello'];
}

$mysqli->close();
#phpinfo();
?>
