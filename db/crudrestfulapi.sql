CREATE TABLE base_clients(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(40),
    contact VARCHAR(20),
    gender VARCHAR(10),
    company VARCHAR (255),
    position VARCHAR (255),
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE = InnoDB
DEFAULT CHARACTER SET utf8mb4
DEFAULT COLLATE utf8mb4_unicode_ci;


ALTER TABLE base_clients ADD COLUMN update_at DATETIME