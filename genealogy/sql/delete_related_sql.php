<?php

$sql = "
delete from related where
(individualid = ? and
relativeid = ?) or
(individualid = ? and
relativeid = ?)
";

?>