drop table history_details;

create table request_history_details
(
account_id bigint not null,
application_id bigint not null,
request_id bigint not null,
service_id bigint not null,
task_id bigint not null,
comments varchar(1000) null,
started varchar(25) not null
);