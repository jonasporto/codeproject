create table categories (
id int primary key auto_increment,
sort int,
name varchar(140) not null,
description text,
parent_id int,
created datetime,
modified datetime
);


create table contents (
id int  primary key auto_increment,
title varchar(140) not null,
subtitle varchar (280),
description text,
sort int,
created datetime,
modified datetime

);


create table categories_contents(
id int primary key auto_increment,
category_id int,
content_id int);

//dump

mysql dump -h localhost -u root -p jonasporto carlos > carlos-backup.sql;
