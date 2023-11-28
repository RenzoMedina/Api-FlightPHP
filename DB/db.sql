CREATE DATABASE IF NOT EXISTS apiphp;

USE apiphp;

CREATE TABLE  `topics` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(100),
  `message` TEXT,
  `status` VARCHAR(100),
  `author` VARCHAR(150),
  `course` VARCHAR(150),
  `create_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `update_date` TIMESTAMP
) ENGINE = InnoDB;
