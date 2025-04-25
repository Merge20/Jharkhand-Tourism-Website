-- comments table
CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    email VARCHAR(255),
    comment_text TEXT,
    created_on DATETIME DEFAULT CURRENT_TIMESTAMP,
    user_id INT,
    place_id INT NOT NULL
);

-- users table

create table users(
	id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    created_on DATETIME NOT NULL DEFAULT CURRENT_TIME
);
