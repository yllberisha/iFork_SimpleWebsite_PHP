CREATE DATABASE fork;

USE fork;

CREATE TABLE orders (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    address VARCHAR(255) NOT NULL,
    apt_suite VARCHAR(50),
    city VARCHAR(50) NOT NULL,
    state VARCHAR(50) NOT NULL,
    postal_code VARCHAR(10) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    email VARCHAR(50) NOT NULL,
    card_number VARCHAR(16) NOT NULL,
    expiration_date VARCHAR(10) NOT NULL,
    cvv VARCHAR(3) NOT NULL,
    order_date DATETIME NOT NULL
);