-- Create application user for workopia database
CREATE USER 'workopia_user'@'localhost' IDENTIFIED BY 'your_secure_password_here';

-- Grant all privileges on workopia schema to the user
GRANT ALL PRIVILEGES ON workopia.* TO 'workopia_user'@'localhost';

-- Flush privileges to ensure changes take effect
FLUSH PRIVILEGES;

-- Optional: Show grants for the created user to verify
SHOW GRANTS FOR 'workopia_user'@'localhost';