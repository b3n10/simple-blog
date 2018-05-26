DROP DATABASE IF EXISTS blog;

CREATE DATABASE blog;

USE blog;

CREATE TABLE users (
	id int(5) not null AUTO_INCREMENT PRIMARY KEY,
	username varchar(20) not null,
	firstname varchar(20) not null,
	lastname varchar(20) not null
);

CREATE TABLE posts (
	id int(5) not null AUTO_INCREMENT PRIMARY KEY,
	title varchar(20) default null,
	body text null,
	user_id int(5) default null,
	created datetime default null
);
