<?php

$threshhold = strrpos($filename, ".");
$threshhold = (strlen($filename) - $threshhold) * -1;
$suffix = substr($filename, $threshhold);

?>