Create database publications;
use publications;
create database publications;
create table classics(
Name varchar(200), 
author varchar(200),
title varchar(200),
category varchar(50),
year smallint,
isbn char(13)
);
create table customers(
Name varchar
(200), 
isbn varchar
(200)
);
insert into classics values
('DN','Mark Twain','The adventures of Tom Sawyer','Fiction', 1876, 573233);
insert into customers values('Ducnhu', 'Daik');