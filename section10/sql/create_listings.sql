CREATE TABLE listings (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    user_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    description LONGTEXT,
    salary VARCHAR(45),
    tags VARCHAR(255),
    company VARCHAR(45)
    address VARCHAR(255)
);