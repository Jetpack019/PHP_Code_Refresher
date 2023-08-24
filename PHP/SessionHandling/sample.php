<?php
session_start();

$_SESSION["username"] = "jade ross";

echo "Hello, ".$_SESSION["username"];

session_destroy();


?>