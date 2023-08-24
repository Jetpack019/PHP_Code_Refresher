<?php
$text = "The quick brown fox jumps over the lazy dog.";
if(preg_match("/brown/",$text)){
    echo "Found 'brown' in the text ";
} else {
    echo "No match found";
}

?>