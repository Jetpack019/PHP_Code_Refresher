<?php

session_start();

if(isset($_SESSION['user_id'])){
    echo "Welcome, User #".$_SESSION['user_id'];
} else{
    echo "Please log in";
}


?>