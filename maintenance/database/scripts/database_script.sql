-- meta data tables --
drop table if exists campaign_references;
drop table if exists campaigns;
create table campaigns
(
idx integer primary key,
label varchar(255) not NULL,
db varchar(255) not NULL,
image_file varchar(255) null,
enabled integer default 0
);

create table campaign_references
(
idx serial primary key,
campaign_idx integer REFERENCES campaigns(idx),
reference_name varchar(255),
reference_file varchar(255)
);

-- Data Tables --
drop table if exists customer_emails;
drop table if exists customer_phones;
drop table if exists extras;
drop table if exists inscriptions;
drop table if exists order_items;
drop table if exists orders;
drop table if exists customers;
drop table if exists addresses;
drop table if exists object_attributes;
drop table if exists emails;
drop table if exists phones;
drop table if exists maintenance_users;

create table addresses
(
idx serial primary key,
prefix varchar(5),
fname varchar(255),
mname varchar(255),
lname  varchar(255),
company  varchar(255),
address1  varchar(255),
address2  varchar(255),
city  varchar(255),
state varchar(255),
zip  varchar(25),
country  varchar(255),
creator varchar(255),
dtstamp varchar(100)
);

create table customers
(
idx serial primary key,
address_idx integer REFERENCES addresses(idx),
repeat integer,
creator varchar(255) not null,
dtstamp varchar(100)
);

create table orders
(
idx serial primary key,
campaign_idx integer REFERENCES campaigns(idx),
customer_idx integer REFERENCES customers(idx),
web_idx varchar(50) not null,
creator varchar(255),
dtstamp varchar(100)
);

create table order_items
(
idx serial primary key,
order_idx integer REFERENCES orders(idx),
rank smallint not null,
item_type smallint,
item_number integer,
description varchar(255) not null,
is_gift_certificate smallint,
price money,
taxable_price money,
creator varchar(255) not null,
dtstamp varchar(100)
);

create table object_attributes
(
idx serial primary key,
object_type varchar(255),
object_idx integer,
name varchar(255),
value varchar(255),
dtstamp varchar(100)
);

create table inscriptions
(
idx serial primary key,
order_item_idx integer REFERENCES order_items(idx),
position integer not null,
inscription varchar(255),
has_greek smallint,
creator varchar(255) not null,
dtstamp varchar(100)
);

create table extras
(
idx serial primary key,
order_item_idx integer REFERENCES order_items(idx),
position integer,
item_description varchar(255),
item_number integer,
item_type varchar(255),
price money,
address_idx integer REFERENCES addresses(idx),
creator varchar(255) not null,
dtstamp varchar(100)
);

create table phones
(
idx serial primary key,
type varchar(100) not null,
phone varchar(30) not null,
raw varchar(30) not null,
verified smallint default 0,
preferred smallint default 0,
creator varchar(255) not null,
dtstamp varchar(100)
);

create table emails
(
idx serial primary key,
type varchar(100) not null,
email varchar(255) not null,
verified smallint default 0,
preferred smallint default 0,
creator varchar(255) not null,
dtstamp varchar(100)
);

create table customer_phones
(
customer_idx integer REFERENCES customers(idx),
phone_idx integer REFERENCES customers(idx),
creator varchar(255) not null,
dtstamp varchar(100),
PRIMARY KEY(customer_idx, phone_idx)
);

create table customer_emails
(
customer_idx integer REFERENCES customers(idx),
email_idx integer REFERENCES customers(idx),
creator varchar(255) not null,
dtstamp varchar(100),
PRIMARY KEY(customer_idx, email_idx)
);

create table maintenance_users
(
idx serial primary key,
type varchar(100),
fullname varchar(255) not null,
username varchar(100) not null,
password varchar(255) not null,
creator varchar(255) not null,
dtstamp varchar(100) 
);

