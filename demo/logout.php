<?php

session_start();
echo "destroyed";
session_destroy();
header('location : Front page.php');
?>