CREATE DATABASE IF NOT EXISTS lampdb;

USE lampdb;

CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    roll_number VARCHAR(50) NOT NULL
);

INSERT INTO students (name, roll_number)
VALUES ('Student', 'YOUR_ROLL_NUMBER');
