DROP DATABASE IF EXISTS bugme;
CREATE DATABASE bugme;
USE bugme;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id INT auto_increment,
    firstname varchar(255),
    lastname varchar(255),
    password varchar(255),
    email varchar(255) UNIQUE,
    date_joined DATETIME,
    PRIMARY KEY (id)
    
);
INSERT INTO users(email, password)
VALUES('admin@project2.com',
MD5('password123'));


DROP TABLE IF EXISTS Issues;
CREATE TABLE Issues(
    id int auto_increment,
    title varchar(255) UNIQUE,
    description Text(2000),
    type varchar(255),
    priority varchar(255),
    status varchar(255),
    assigned_to int,
    created_by int,
    created DATETIME,
    updated DATETIME,
    PRIMARY KEY (id)
);