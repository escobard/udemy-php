CREATE TABLE workopia.listings (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    user_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    description LONGTEXT,
    salary VARCHAR(45),
    tags VARCHAR(255),
    company VARCHAR(45),
    address VARCHAR(255),
    city VARCHAR(255),
    state VARCHAR(255),
    phone VARCHAR(45),
    email VARCHAR(45),
    requirements LONGTEXT,
    benefits LONGTEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP() NOT NULL
);