CREATE DATABASE saas DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE saas;

CREATE TABLE IF NOT EXISTS users (
	user_id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,	
	website VARCHAR(30) NOT NULL UNIQUE KEY,
    email VARCHAR(100) NOT NULL UNIQUE KEY,
	password VARCHAR(50) NOT NULL,
	active TINYINT(1) UNSIGNED NOT NULL DEFAULT '1'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS about_page (
	about_page_id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
	user_id INT UNSIGNED NOT NULL,
	FOREIGN KEY (user_id) REFERENCES users(user_id),
	title VARCHAR(50) NOT NULL,
	theme VARCHAR(50) NOT NULL,
	address VARCHAR(200) NOT NULL,
	phone VARCHAR(10) NOT NULL,
	email VARCHAR(50) NOT NULL,
	content TEXT NOT NULL,
	active TINYINT(1) UNSIGNED NOT NULL DEFAULT '1'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
