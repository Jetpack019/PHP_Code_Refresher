<?php
$currentDate = date("Y-m-d");
echo "Today's date: $currentDate";

$timestamp = strtotime("next week");
$nextWeekDate = date("Y-m-d",$timestamp);
echo "Next week's date: $nextWeekDate";

?>