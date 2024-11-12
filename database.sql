-- Create the database
CREATE DATABASE IF NOT EXISTS mydatabase;

-- Select the database to use
USE mydatabase;

-- Create the users table
CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    middlename VARCHAR(50),
    age INT,
    address VARCHAR(255),
    course_section VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
