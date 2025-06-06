<?php
session_start();
$_SESSION = [];
session_destroy();
header("location:../authentication/login.php?logout=success");
exit();
