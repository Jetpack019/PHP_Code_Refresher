<?php
$email = "user@example.com";

if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "Email is valid";
} else{
    echo "Email is not valid";
}


?>