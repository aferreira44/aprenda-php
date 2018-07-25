\c root@localhost

show databases;

create database mytodo;

use mytodo;

show tables;

create table todos (descripton text, completed boolean);

describe todos;

drop table todos;

create table todos (description text NOT NULL, completed boolean NOT NULL);

create table todos (id integer PRIMARY KEY AUTO_INCREMENT, description text NOT NULL, completed boolean NOT NULL);

insert into todos (description, completed) values ('Go to the store', false);

select * from todos;