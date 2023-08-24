<?php
setcookie("username","john_doe", time() + 3600, "/");

if(isset($_COOKIE["username"])){
    echo "Welcome back, ".$_COOKIE["username"];
}


?>