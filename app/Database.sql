CREATE DATABASE mvc_project;

USE mvc_project;

CREATE TABLE
    products (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        price DECIMAL(10, 2) NOT NULL,
        description TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

INSERT INTO
    products (name, price, description)
VALUES
    (
        'Gaming Mouse',
        49.99,
        'High precision optical mouse'
    ),
    ('Mechanical Keyboard', 89.99, 'RGB backlit keys');