<?php
$plaintext = "Hello Jade Ross";
$key = "0123113141231231";

$encrypted = openssl_encrypt($plaintext,"aes-256-cbc",$key,0,$key);
$decrypted = openssl_decrypt($encrypted,"aes-256-cbc",$key,0,$key);
echo "Encrypted: $encrypted, Decrypted: $decrypted";

?>