drop table related;

create table related
(
relatedid int NOT NULL AUTO_INCREMENT,
individualid varchar(255) not null,
relationid char(2) not null,
relativeid varchar(255) not null,
datecreated datetime not null,
proxyid varchar(255) not null,
datelastmodified datetime null,
primary key (relatedid)
);

create table relation_class
(
classid int NOT NULL AUTO_INCREMENT,
group_class varchar(255),
primary key (classid)
);

insert into relation_class (group_class) values ('parent');
insert into relation_class (group_class) values ('child');
insert into relation_class (group_class) values ('spouse');
insert into relation_class (group_class) values ('partner');

create table relations
(
relationid int NOT NULL AUTO_INCREMENT,
classid int,
gender int,
text varchar(255),
primary key (relationid)
)

insert into related
select 
	null as relatedid,
	r.parentid as individualid,
	rn.relationid,
	r.childid as relativeid, 
	r.datecreated,
	r.proxyid,
	r.datelastmodified
from 
	relatives r
join
	relationships rs on r.relationshipid = rs.relationshipid
left join 
	relations rn on rs.text = rn.text;
	
-- parents
insert into related
select distinct
	null as relatedid,
	r.relativeid as individualid,
	if(p.gender = 1, 2, 1) as relationid,
	r.individualid as relativeid,
	r.datecreated,
	r.proxyid,
	r.datelastmodified
from
	related r
join
	people p on r.relativeid = p.id;	