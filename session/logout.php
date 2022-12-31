<?php
session_start();
session_unset();
session_destroy();
echo "<script>alert('Logged Out')</script>";
header("refresh:2;url=../display_all.php");
?>