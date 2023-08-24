<?php
function isPalindrome($str){
    $str = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $str));
}

$string = "A man, a plan, a canal, Panama";

if(isPalindrome($string)){
    echo "It's a palindrome!";
} else{
    echo "It's not a palindrome";
}


?>