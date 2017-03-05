<?php

$sql = "
insert into related
(
individualid,
relationid,
relativeid,
datecreated,
proxyid
)
values
(
?,
?,
?,
?,
?
)
";

?>