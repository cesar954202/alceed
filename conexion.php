<?php
$mysqli = new mysqli("localhost","root","","id7043014_central");
//$mysqli = new mysqli("localhost","id7043014_players","Alced002","id7043014_central");
if ($mysqli->connect_errno) {
echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>