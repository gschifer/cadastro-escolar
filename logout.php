<?php

session_start();
session_destroy();
header("Location: login-page.php");
exit();

?>