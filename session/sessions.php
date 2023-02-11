<?php
//sessions()
session_start();
$_SESSION['username']="Ayana";
$_SESSION['password']="123";
$_SESSION['email']="ayan@gmail.com";
echo"Session data is saved";

?>