DROP DATABASE IF EXISTS psicol;

CREATE DATABASE psicol;

USE psicol;

DROP TABLE IF EXISTS buyers;

CREATE TABLE buyers(
    id INT UNSIGNED AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    address VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(255),
    PRIMARY KEY(id)
);

DROP TABLE IF EXISTS tickets;

CREATE TABLE tickets(
    id INT UNSIGNED AUTO_INCREMENT,
    number VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
);

DROP TABLE IF EXISTS assignments;

CREATE TABLE assignments(
    id INT UNSIGNED AUTO_INCREMENT,
    buyer_id INT UNSIGNED NOT NULL,
    ticket_id INT UNSIGNED NOT NULL,
    number INT,
    PRIMARY KEY(id)
);