<?php

$sql = "
select
	p.id,
	p.name,
	p.label,
	p.event,
	p.accuracy,
	p.period,
	p.calendar,
	p.year,
	p.month,
	p.day,
	p.place,
	p.gender,
	p.description,
	p.individual,
	p.child,
	p.parent,
	p.spouseid,
	p.proxyid,
	p.changerid,
	p.lastchangedate,
	p.datecreated,
	p.deceased,
	p.family,
	s.text as relationship 
from 
	people p
join 
	related r on p.id = r.individualid
join
	relations s on r.relationid = s.relationid
join
	relation_class c on s.classid = c.classid
where
	r.relativeid = ? and
	c.group_class = 'parent'
order by
	year,
	month,
	day
	
";
?>