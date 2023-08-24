<?php
$resultPerPage = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $resultPerPage;

$query = "SELECT * FROM products LIMIT $offset,$resultsPerPage";

?>
