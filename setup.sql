-- Create the database
CREATE DATABASE flash0;

-- Use the database
USE flash0;

-- Create the users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL,
    role VARCHAR(20) NOT NULL
);

-- Insert sample data
INSERT INTO users (username, password, role) VALUES 
('admin', 'admin123', 'admin'),
('user1', 'user123', 'user');
