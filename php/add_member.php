<?php
include "conDB.php";

//POST['user'] --> name="user" (html)
$user = $_POSE['user'];
$pass = $_POSE['pass'];
$sex = $_POSE['sex'];
$age = $_POSE['age'];
$fav_a = $_POSE['fav_a'];
$fav_b = $_POSE['fav_b'];

//echo $user;
$fav = $fav_a . "," . $fav_b;

$strSQL = "INSERT INTO tb_member 
           VALUES('$user','$pass','$sex','$fav','$age')";
mysqli_query($link,$strSQL) or die(mysqli_errro($link));
?>

<a href="../add_member.html">BACK</a>