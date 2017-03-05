<?php

$sql = "
select
	p.idx as team_lead,
	r.payer_id as benefactor,
	r.position, 
	tc.mc as member_count
from 
	patrons p
join
	relationships r on p.idx = r.payee_id
join 
	(
	select 
		p1.idx, 
		p1.personal_key, 
		count(p2.idx) as mc 
	from 
		patrons p1 
	left outer join 
		patrons p2 on p1.personal_key = p2.team_code 
	where 
		p1.personal_key is not null and
		p1.active = 1
	group by 
		p1.idx, 
		p1.personal_key 
	order by 
		mc asc, 
		p2.idx asc
	) as tc on tc.idx = r.payer_id
where
	p.personal_key = '".$patron["team_code"]."' and
	r.position = ".$position."
order by
	tc.mc asc,
	r.payer_id asc
limit 1;
";

?>