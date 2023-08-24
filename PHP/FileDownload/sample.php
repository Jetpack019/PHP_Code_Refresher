<?php
$filePath = "./sample.pdf";
header("Content-Disposition: attachment; filename=\"".basename($filePath)."\" ");
readfile($filePath);
?>