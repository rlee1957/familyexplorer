<?php
session_start();
session_destroy();
$_SESSION = null;
header("location: http://contributions4u.com");
?>