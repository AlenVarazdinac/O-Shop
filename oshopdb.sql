drop database if exists oshopdb;
create database oshopdb default character set utf8;
use oshopdb;

--mysql -uvarazdinac -p*** --default_character_set=utf8 < c:\xampp\htdocs\O-Shop\oshopdb.sql

create table item(
item_id     INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
item_name   VARCHAR(100) NOT NULL,
item_price  DECIMAL(18,2) NOT NULL,
item_type_id INT NOT NULL
);

create table user(
user_id     INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
user_name   VARCHAR(50) NOT NULL,
user_email  VARCHAR(50) NOT NULL,
user_pw     CHAR(32) NOT NULL,
user_rights INT(1) NOT NULL,
user_gender VARCHAR(15) NOT NULL
);

create table item_type(
item_type_id    INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
item_type_name  VARCHAR(10) NOT NULL,
item_type_img   VARCHAR(100) NOT NULL,
item_type_link  VARCHAR(150) NOT NULL
);

insert into item(item_name, item_price, item_type_id)
values
("Counter Strike: Global Offensive", 12.99, 1),
("Overwatch", 27.49, 1),
("Rust", 13.40, 1),
("Rocket League", 13.97, 1),
("Grand Theft Auto V", 32.12, 1),
("Dunkirk", 16.99, 2),
("Despicable Me 3", 12.49, 2),
("Cars 3", 14.87, 2),
("Annabelle: Creation", 11.30, 2),
("Fast & Furious 8", 15.21, 2),
("6 Days", 18.00, 2),
("Hardwell & KAAZE - We Are Legends", 2.99, 3),
("Alan Walker - Faded", 1.99, 3),
("Alan Walker - Alone", 1.99, 3),
("Galantis - Runaway", 1.80, 3),
("SIA - Cheap Trills", 1.49, 3);

insert into user(user_name, user_email, user_pw, user_rights, user_gender)
values
('AlenV', 'alen.varazdinac@gmail.com', md5('123'), 1, 'Male'),
('TestUser', 'utest@gmail.com', md5('123'), 0, 'Female');

insert into item_type(item_type_name, item_type_img, item_type_link)
values
('Game', 'img/mainPanel/game_img.png', 'private/items/gameItems.php'),
('Movie', 'img/mainPanel/movie_img.png', 'private/items/movieItems.php'),
('Music', 'img/mainPanel/music_img.png', 'private/items/musicItems.php');

alter table item add foreign key (item_type_id) references item_type(item_type_id);
