<?php
$text = "The quick brown fox jumps over the lazy dog.";
if(preg_match("/quick/",$text)){
    echo "Found 'quick' in the text ";
} else {
    echo "No match found";
}

?>  