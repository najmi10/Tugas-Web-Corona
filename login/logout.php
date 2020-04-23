<?php
session_start();

session_destroy();
header("Location: http://localhost/corona_web/login/index.php");

?>