<?php
$xmlString = '<book><title>PHP Basics</title><author>John Doe</author></book>';
$xml = simplexml_load_string($xmlString);
echo "Title: " . $xml->title . ", Author: " . $xml ->author;


?>