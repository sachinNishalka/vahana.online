<?php
session_start();
session_unset();
session_destroy();
echo "<script>alert('Logged Out')</script>";
<<<<<<< HEAD
header('Location: ' . $_SERVER['HTTP_REFERER']);
=======
header("refresh:2;url=../display_all.php");
>>>>>>> a2356ede0d13bfba58f44a706e4d1fa836bcd5fc
?>