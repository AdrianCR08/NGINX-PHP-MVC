CREATE DATABASE mvc;
USE mvc;

CREATE TABLE usuarios(
    id INT AUTO_INCREMENT,
    name VARCHAR(50),
    lastname VARCHAR(50),
    age INT,
    email VARCHAR(100),
    PRIMARY KEY (id)
) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

INSERT INTO contactos (name, lastname, age, email)
VALUES 
    ('Sophia', 'Garcia', 38, 'sophia.garcia@example.com'),
    ('Oliver', 'Martin', 29, 'oliver.martin@example.com'),
    ('Lily', 'Hernandez', 32, 'lily.hernandez@example.com'),
    ('Benjamin', 'Thompson', 42, 'benjamin.thompson@example.com');

CREATE TABLE contactos(
    id INT AUTO_INCREMENT,
    name VARCHAR(50),
    lastname VARCHAR(50),
    age INT,
    email VARCHAR(100),
    PRIMARY KEY (id)
) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

INSERT INTO contactos (name, lastname, age, email)
VALUES 
    ('Sophia', 'Garcia', 38, 'sophia.garcia@example.com'),
    ('Oliver', 'Martin', 29, 'oliver.martin@example.com'),
    ('Lily', 'Hernandez', 32, 'lily.hernandez@example.com'),
    ('Benjamin', 'Thompson', 42, 'benjamin.thompson@example.com');