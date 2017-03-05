<?php

$pattern = "/[^a-z0-9]/i";
$replacement = "_";
$target = preg_replace($pattern, $replacement, $source);
$source = $target;
$pattern = "/_{2,}/i";
$clean_filename = preg_replace($pattern, $replacement, $source);

?>