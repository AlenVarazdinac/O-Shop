drop database if exists oshopdb;
create database oshopdb default character set utf8;
use oshopdb;

--mysql -uvarazdinac -p*** --default_character_set=utf8 < c:\xampp\htdocs\O-Shop\oshopdb.sql

create table item(
item_id     INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
item_name   VARCHAR(100) NOT NULL,
item_price  DECIMAL(18,2) NOT NULL,
item_type   VARCHAR(10) NOT NULL
);

create table user(
user_id     INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
user_name   VARCHAR(50) NOT NULL,
user_email  VARCHAR(50) NOT NULL,
user_pw     CHAR(32) NOT NULL,
user_rights INT(1) NOT NULL,
user_gender VARCHAR(15) NOT NULL
);

insert into item(item_name, item_price, item_type)
values
("Counter Strike: Global Offensive", 12.99, "Game"),
("Overwatch", 27.49, "Game"),
("Rust", 13.40, "Game"),
("Rocket League", 13.97, "Game"),
("Dunkirk", 16.99, "Movie"),
("Despicable Me 3", 12.49, "Movie"),
("Cars 3", 14.87, "Movie"),
("Fast & Furious 8", 15.21, "Movie"),
("Hardwell & KAAZE - We Are Legends", 2.99, "Music");

insert into user(user_name, user_email, user_pw, user_rights, user_gender)
values
('AlenV', 'alen.varazdinac@gmail.com', md5('123'), 1, 'Male'),
('TestUser', 'utest@gmail.com', md5('123'), 0, 'Female');
